// Améliore les groupes de boutons radio (champs association "expanded") avec
// une barre de recherche, un conteneur défilant, et (optionnel) des miniatures.
// Remplace les <select>/autocomplete qui pouvaient se fermer seuls sur certains
// navigateurs : ici tout est du HTML statique, il n'y a aucun popup à fermer.
(function () {
    'use strict';

    function enhanceRadioGroup(name, options) {
        options = options || {};
        var inputs = Array.prototype.slice.call(
            document.querySelectorAll('input[type="radio"][name="' + name + '"]')
        );
        if (inputs.length < (options.minCount || 1)) {
            return;
        }

        var items = inputs
            .map(function (input) { return input.closest('.form-check'); })
            .filter(Boolean);
        if (!items.length) {
            return;
        }

        var widget = items[0].parentElement;
        if (!widget || widget.dataset.eaPickerDone) {
            return;
        }
        widget.dataset.eaPickerDone = '1';

        var wrapper = document.createElement('div');
        wrapper.className = 'ea-picker';

        var search = document.createElement('input');
        search.type = 'text';
        search.className = 'ea-picker-search';
        search.placeholder = options.searchPlaceholder || 'Rechercher...';

        var list = document.createElement('div');
        list.className = options.thumbnails ? 'ea-picker-grid' : 'ea-picker-list';

        items.forEach(function (item) { list.appendChild(item); });

        wrapper.appendChild(search);
        wrapper.appendChild(list);
        widget.insertBefore(wrapper, widget.firstChild);

        search.addEventListener('input', function () {
            var query = search.value.trim().toLowerCase();
            items.forEach(function (item) {
                var label = item.querySelector('label');
                var text = (label ? label.textContent : '').trim().toLowerCase();
                item.classList.toggle('ea-picker-hidden', query !== '' && text.indexOf(query) === -1);
            });
        });

        if (options.thumbnails) {
            fetch(options.thumbnails.endpoint)
                .then(function (res) { return res.ok ? res.json() : []; })
                .then(function (rows) {
                    var byId = {};
                    rows.forEach(function (row) { byId[row.id] = row.fileName; });

                    items.forEach(function (item) {
                        var input = item.querySelector('input[type="radio"]');
                        var label = item.querySelector('label');
                        if (!input || !label) {
                            return;
                        }

                        var fileName = byId[input.value];
                        var thumb = document.createElement(fileName ? 'img' : 'span');
                        thumb.className = fileName ? 'ea-picker-thumb' : 'ea-picker-thumb-none';
                        if (fileName) {
                            thumb.src = options.thumbnails.baseUrl + fileName;
                            thumb.alt = '';
                        } else {
                            thumb.textContent = options.thumbnails.emptyLabel || '—';
                        }
                        label.classList.add('form-check-label');
                        label.prepend(thumb);
                    });
                })
                .catch(function () { /* pas de miniatures si l'appel échoue, le champ reste utilisable */ });
        }
    }

    // Convertit automatiquement N'IMPORTE QUEL <select> simple d'un formulaire
    // d'édition/création du back-office en boutons radio. Corrige le même
    // problème (liste qui se ferme seule) pour tous les champs ChoiceField,
    // pas seulement ceux qu'on a explicitement convertis en "expanded" côté PHP.
    function convertSelectToRadios(select, index) {
        if (select.multiple || select.dataset.eaPickerDone) {
            return;
        }
        if (select.options.length < 2) {
            return;
        }

        select.dataset.eaPickerDone = '1';

        // Si EasyAdmin a initialisé Tom-Select sur ce champ (widget "ea-autocomplete"),
        // son interface a été injectée juste à côté du <select> d'origine : on la retire,
        // car c'est justement ce composant qui se ferme tout seul sur certains navigateurs.
        var tsWrapper = select.nextElementSibling;
        if (tsWrapper && tsWrapper.classList.contains('ts-wrapper')) {
            tsWrapper.remove();
        }

        var wrapper = document.createElement('div');
        wrapper.className = 'ea-picker';

        var needsSearch = select.options.length > 6;
        var search = null;
        if (needsSearch) {
            search = document.createElement('input');
            search.type = 'text';
            search.className = 'ea-picker-search';
            search.placeholder = 'Rechercher...';
            wrapper.appendChild(search);
        }

        var list = document.createElement('div');
        list.className = 'ea-picker-list';
        wrapper.appendChild(list);

        var items = [];
        var groupName = select.name;
        Array.prototype.forEach.call(select.options, function (option, optionIndex) {
            var id = (select.id || 'ea-select-' + index) + '-' + optionIndex;

            var formCheck = document.createElement('div');
            formCheck.className = 'form-check';

            var input = document.createElement('input');
            input.type = 'radio';
            input.className = 'form-check-input';
            input.name = groupName;
            input.id = id;
            input.value = option.value;
            input.checked = option.selected;
            if (select.required) {
                input.required = true;
            }
            if (select.disabled) {
                input.disabled = true;
            }

            var label = document.createElement('label');
            label.className = 'form-check-label';
            label.setAttribute('for', id);
            label.textContent = option.text;

            formCheck.appendChild(input);
            formCheck.appendChild(label);
            list.appendChild(formCheck);
            items.push(formCheck);

            // Garde le <select> original synchronisé, au cas où un autre script
            // (aperçu, badge de couleur…) écoute encore ses évènements 'change'.
            input.addEventListener('change', function () {
                select.value = option.value;
                select.dispatchEvent(new Event('change', { bubbles: true }));
            });
        });

        if (search) {
            search.addEventListener('input', function () {
                var query = search.value.trim().toLowerCase();
                items.forEach(function (item) {
                    var label = item.querySelector('label');
                    var text = (label ? label.textContent : '').trim().toLowerCase();
                    item.classList.toggle('ea-picker-hidden', query !== '' && text.indexOf(query) === -1);
                });
            });
        }

        select.style.display = 'none';
        select.insertAdjacentElement('afterend', wrapper);
    }

    function enhanceAllFormSelects() {
        var selects = document.querySelectorAll('.ea-edit-form select, .ea-new-form select');
        Array.prototype.forEach.call(selects, convertSelectToRadios);
    }

    // 'load' (pas 'DOMContentLoaded') : on veut passer APRÈS l'initialisation de
    // Tom-Select par le script principal d'EasyAdmin, pour pouvoir la retirer proprement.
    window.addEventListener('load', function () {
        enhanceRadioGroup('Article[author]', { minCount: 6 });
        enhanceRadioGroup('Article[coverImage]', {
            minCount: 1,
            searchPlaceholder: 'Rechercher une image...',
            thumbnails: {
                endpoint: '/admin/archive-image-list.json',
                baseUrl: '/uploads/archives/',
                emptyLabel: 'Aucune',
            },
        });
        enhanceAllFormSelects();
    });
})();

let editDepositBtn = document.querySelector('.edit-deposit');
let depositForm = document.querySelector('.deposit-form');

$('.record-table.record-export').DataTable({
	dom: 'Bfrtip',
    "order": [
    ],
    // "displayLength": 25,
	buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
});

window.addEventListener('load', () => {
    registerBtnActionClick();
//  editDepositBtn.addEventListener('click', (e) => {
//         e.preventDefault();
//         $('#deposit-modal').modal({
//             fadeDuration: 100,
//             closeClass: 'icon-remove',
//             closeText: '&times'
//           });
//     });
    
//     depositForm.addEventListener('submit', (e) => {
//         e.preventDefault();
//         showLoading();
//         // handleSavedeposit(e.currentTarget);
//         e.currentTarget.submit();
//     });
});


function registerBtnActionClick(target){
    let actionLinks = [... document.querySelectorAll('.action-link')];
    actionLinks.forEach((actionLink) => {
        if(!actionLink.dataset.added){
            actionLink.addEventListener('click', (e) => {
                e.preventDefault();
                clickedBtn = e.currentTarget;
                handleBtnAction(e.currentTarget);
            });
            actionLink.dataset.added = true;
        }
    });
}

function handleBtnAction(btn){
    let action = clickedBtn.dataset.action;
    if(action == 'edit'){
        isEdit = true;
        let dataset = {... clickedBtn.dataset};
        for(key in dataset){
            if(depositForm.elements.namedItem(key)){
                depositForm.elements.namedItem(key).value = dataset[key].toLowerCase();
            }
        }
        $('#deposit-modal').modal('show');
    } 
}
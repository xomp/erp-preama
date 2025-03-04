function addTableRowFromForm(form, table) {
  // Get the form and table elements
  const formElements = document.getElementsByTagName(form);
  const formElement = formElements[formElements.length - 1];
  const tableElement = document.getElementsByTagName(table)[0];


  // Create a new row 
  const newRow = tableElement.insertRow(-1);

  // Loop through form elements and add cells
  const formData = {};
  Array.from(formElement.elements).forEach(element => {
    if (element.tagName === 'INPUT' || element.tagName === 'SELECT') {
      const label = element.previousElementSibling;
      if (label.length != 0 && label.tagName === 'LABEL') {
        if (element.tagName === 'SELECT') {
          formData[label.textContent] = element.options[element.selectedIndex].text;
        } else if (label.length != 0 && element.tagName === 'INPUT') {
          formData[label.textContent] = element.value;
        }
      }
    }
  });

  const tableHeaders = Array.from(tableElement.tHead.rows[0].cells).map(th => th.textContent);
  const tableCells = Array.from(tableElement.tBodies[0].rows[0].cells).map(td => td.innerHTML);
  const tableData = tableHeaders.reduce((acc, curr, index) => {
    acc[curr] = tableCells[index];
    return acc;
  }, {});

  // console.log(tableData);


  const newFormData = {...formData};
  Object.keys(tableData).forEach(key => {
    if (!formData.hasOwnProperty(key)) {
      newFormData[key] = tableData[key];
    }
  });

  console.log(newFormData);


  Array.from(tableElement.tHead.rows[0].cells).forEach((th, index) => {
    const newCell = newRow.insertCell(index);
    const key = th.textContent;
    if (newFormData.hasOwnProperty(key)) {
      newCell.innerHTML = newFormData[key];
    }
  });


  // Reset the form after adding the row
  formElement.reset();
}
document.querySelector('.add').onclick = () => {
  const newRow = document.createElement('tr');
  newRow.innerHTML = `
    <td></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <button class="save" id={$row['ID']}'>Save</button>
  `;
  document.querySelector('.table').appendChild(newRow);
};

document.querySelectorAll('.delete').forEach(Button => {
  Button.onclick = () => {
    if (confirm("Are you sure?")) {
      Button.parentElement.parentElement.remove();
    }
  };
});



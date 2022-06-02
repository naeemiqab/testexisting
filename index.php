<!DOCTYPE html>
<html>
<head>
    <title></title>

<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<style type="text/css">
    


.custom-select {
  position: relative;
  font-family: Arial;
   border: 0;
  display: block;
  color: #1B8375;
  resize: none;
  background: none;
  outline: none;
  font-family: "Source Sans Pro", sans-serif;
  font-size: 20px;
  width:100%;

}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: #FFF;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #1B8375;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: #fff;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
  width: 100%

  


}

 .select-items div {
    display: block;
  font-size: 18px;
  position: relative;
  text-align: left;
  border-radius: 3px;
  -webkit-transition: background 600ms ease, color 600ms ease;
  transition: background 600ms ease, color 600ms ease;
  margin-bottom: 2px;
  max-width: 100%;
  border-radius: 4px;
  color: #1B8375;
  background-color: rgba(79, 176, 174, 0.1);
  box-shadow: rgba(79, 176, 174, 0.6) 0px 0px 0px 1px inset;
  cursor: pointer;
  opacity: 1;
  height: auto;
  border-radius: 0.25rem;
}


/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: #cae7e7;
}

</style>
</head>

<body>
<div class="custom-select" style="width:500px;">
  <select placeholder="Select An Option">
    <option value="2">Vanilla</option>
    <option value="3">Chocolate</option>
    <option value="4">Mint Chocolate Chip</option>
    <option value="5">Soccer</option>
    <option value="6">Strawberry</option>

  </select>
</div>


<script  src="script.js" type="text/javascript"></script>
<!-- M12.293.293l1.414 1.414L7 8.414.293 1.707 1.707.293 7 5.586z -->

</body>
</html>



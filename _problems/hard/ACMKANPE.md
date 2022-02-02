---
{"languages_supported":{"0":"NA"},"title":"ACMKANPE","category":"NA","old_version":true,"problem_code":"ACMKANPE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><div id="kanpur">
<div class="tabular">
<table id="TBL-17" class="tabular" cellpadding="0" cellspacing="0">
    

<tr id="TBL-17-1-">
<td id="TBL-17-1-1" class="td11"><a id="x1-6r5" name="x1-6r5"></a> <span class="cmssbx-10x-x-600">E</span></td>
<td id="TBL-17-1-2" class="td11">
<div class="tabular">
<table id="TBL-18" class="tabular" cellpadding="0" cellspacing="0">
   

<tr id="TBL-18-1-">
<td id="TBL-18-1-1" class="td11"><span class="cmssbx-10x-x-172">Algebra Express</span></td>
</tr>
<tr id="TBL-18-2-">
<td id="TBL-18-2-1" class="td11">
<div class="tabular">
<table id="TBL-19" class="tabular" cellpadding="0" cellspacing="0">
    

<tr id="TBL-19-1-">
<td id="TBL-19-1-1" class="td10">Input file:</td>
<td id="TBL-19-1-2" class="td01"><span class="cmtt-10x-x-109">stdin</span></td>
</tr>
<tr id="TBL-19-2-">
<td id="TBL-19-2-1" class="td10">Output file:</td>
<td id="TBL-19-2-2" class="td01"><span class="cmtt-10x-x-109">stdout</span></td>
</tr>
<tr id="TBL-19-3-">
<td id="TBL-19-3-1" class="td10"></td>
</tr>

</table>
</div>
</td>
</tr>

</table>
</div>
</td>
</tr>
<tr id="TBL-17-2-">
<td id="TBL-17-2-1" class="td11"></td>
</tr>

</table>
</div>

<p class="noindent">Mim is a high school algebra teacher. Just last week, she taught     her students how to evaluate an expression. For example, if</p>
<div class="center">
<p class="noindent"></p>
<p class="noindent"><span class="cmmi-10x-x-109">r</span> = <span class="cmmi-10x-x-109">a</span> <span class="cmsy-10x-x-109">×</span> (<span class="cmmi-10x-x-109">b</span> + <span class="cmmi-10x-x-109">c</span>) <span class="cmsy-10x-x-109">−</span> <span class="cmmi-10x-x-109">d</span> <span class="cmsy-10x-x-109">×</span> <span class="cmmi-10x-x-109">e</span></p>
</div>

<p class="noindent">Given the values of <span class="cmmi-10x-x-109">a</span>,     <span class="cmmi-10x-x-109">b</span>, <span class="cmmi-10x-x-109">c</span>,     <span class="cmmi-10x-x-109">d</span> and <span class="cmmi-10x-x-109">e</span>, they     can evaluate <span class="cmmi-10x-x-109">r</span>. </p>
<p class="noindent">Now, to test how well her students are able to do these     arithmetic, she has to prepare some test. But, she do this every year, and each time     she has to make same type of questions. That made her a little bored. She thinks that     evaluating an expression only depends on the position of operators and variables, not     the variables itself. For example in the expression above, for all possible values of     <span class="cmmi-10x-x-109">a</span>, <span class="cmmi-10x-x-109">b</span>,     <span class="cmmi-10x-x-109">c</span>, <span class="cmmi-10x-x-109">d</span> and     <span class="cmmi-10x-x-109">e</span>, they will all be equally hard to evaluate.      </p>
<p class="noindent">She has made some generic expressions, and a set of values, which     she may use in any order (e.g. one time she may use <span class="cmmi-10x-x-109">a</span> = 2, <span class="cmmi-10x-x-109">b</span> = 5, another     time she may use <span class="cmmi-10x-x-109">a</span> = 5, <span class="cmmi-10x-x-109">b</span> = 2). Now, she wants to know, the number of possible ways     to assign these values, so that, the value of the expression lies within a specified     limit. </p>
<p class="noindent"><span class="cmssbx-10x-x-144">Input</span> </p>
<p class="noindent">First line contains <span class="cmmi-10x-x-109">T</span>, the     number of test cases. </p>
<p class="noindent">Each test case starts with three integers <span class="cmmi-10x-x-109">N</span>(2 <span class="cmsy-10x-x-109">≤</span> <span class="cmmi-10x-x-109">N</span> <span class="cmsy-10x-x-109">≤</span> 12), <span class="cmmi-10x-x-109">l</span>, <span class="cmmi-10x-x-109">h</span> (<span class="cmsy-10x-x-109">−</span>10<sup><span class="cmr-8">12</span></sup> <span class="cmsy-10x-x-109">≤</span> <span class="cmmi-10x-x-109">l</span> <span class="cmsy-10x-x-109">≤</span> <span class="cmmi-10x-x-109">h</span> <span class="cmsy-10x-x-109">≤</span> 10<sup><span class="cmr-8">12</span></sup>),     the number of variables, lower limit and the upper limit of the acceptable expression     values. </p>
<p class="noindent">Next line contains <span class="cmmi-10x-x-109">N</span> integers     <span class="cmmi-10x-x-109">a</span><sub><span class="cmmi-8">i</span></sub>(0     <span class="cmsy-10x-x-109">≤</span> <span class="cmmi-10x-x-109">a</span><sub><span class="cmmi-8">i</span></sub> <span class="cmsy-10x-x-109">≤</span> 9), the value of the variables she will be using in the     exam. </p>
<p class="noindent">Next line contains the expression, where each variable is     represented as ‘<span class="cmtt-10x-x-109">x</span>’. The expression     will be well formed, and will contain only the symbols ‘+’,     ‘-’, ‘*’,‘(’,‘)’ and     ‘<span class="cmtt-10x-x-109">x</span>’. </p>
<p class="noindent"><span class="cmssbx-10x-x-144">Output</span> </p>
<p class="noindent">For each test case, output the number of different assignments,     that produce results within the limit [<span class="cmmi-10x-x-109">l, h</span>].      </p>
<p class="noindent">Note that, you will be replacing each ‘<span class="cmtt-10x-x-109">x</span>’ with a value <span class="cmmi-10x-x-109">a</span><sub><span class="cmmi-8">j</span></sub>(1 <span class="cmsy-10x-x-109">≤</span> <span class="cmmi-10x-x-109">j</span> <span class="cmsy-10x-x-109">≤</span> <span class="cmmi-10x-x-109">N</span>). Each     <span class="cmmi-10x-x-109">a</span><sub><span class="cmmi-8">j</span></sub> have to     be used exactly once. Two assignments are considered the same, if, after replacing     all ‘<span class="cmtt-10x-x-109">x</span>’, the expressions look the     same. </p>
<p class="noindent"><span class="cmssbx-10x-x-144">Sample input and output</span> </p>
<p class="noindent"> </p>
<div class="obeylines-v">
<div class="tabular">
<table id="TBL-20" class="tabular" cellpadding="0" cellspacing="0" rules="groups">
      

<tr class="hline">
<td>
<hr />
</td>
<td>
<hr />
</td>
</tr>
<tr id="TBL-20-1-">
<td id="TBL-20-1-1" class="td11">
<div class="multicolumn"><span class="cmtt-10x-x-109">stdin</span></div>
</td>
<td id="TBL-20-1-2" class="td11">
<div class="multicolumn"><span class="cmtt-10x-x-109">stdout</span></div>
</td>
</tr>
<tr class="hline">
<td>
<hr />
</td>
<td>
<hr />
</td>
</tr>
<tr id="TBL-20-2-">
<td id="TBL-20-2-1" class="td11">
<div class="minipage">
<p class="noindent"><span class="cmtt-10x-x-109">3</span> </p>
<p class="noindent"><span class="cmtt-10x-x-109">3</span> <span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">10</span> </p>
<p class="noindent"><span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">2</span> <span class="cmtt-10x-x-109">5</span> </p>
<p class="noindent"><span class="cmtt-10x-x-109">x+x*x</span> </p>
<p class="noindent"><span class="cmtt-10x-x-109">4</span> <span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">10</span> </p>
<p class="noindent"><span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">2</span> <span class="cmtt-10x-x-109">2</span> <span class="cmtt-10x-x-109">5</span> </p>
<p class="noindent"><span class="cmtt-10x-x-109">(x+x)*(x-x)</span> </p>
<p class="noindent"><span class="cmtt-10x-x-109">4</span> <span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">100</span> </p>
<p class="noindent"><span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">1</span> <span class="cmtt-10x-x-109">1</span> </p>
<p class="noindent"><span class="cmtt-10x-x-109">x*(x-(x*x))</span></p>
</div>
</td>
<td id="TBL-20-2-2" class="td11">
<div class="minipage">
<p class="noindent"><span class="cmtt-10x-x-109">4</span> </p>
<p> </p>
<p class="noindent"><span class="cmtt-10x-x-109">4</span> </p>
<p class="noindent"><span class="cmtt-10x-x-109">0</span></p>
</div>
</td>
</tr>
<tr class="hline">
<td>
<hr />
</td>
<td>
<hr />
</td>
</tr>
<tr id="TBL-20-3-">
<td id="TBL-20-3-1" class="td11"></td>
</tr>

</table>
</div>
</div>
</div>
<p></p>    
---
{"languages_supported":{"0":"NA"},"title":"ACMKANPD","category":"NA","old_version":true,"problem_code":"ACMKANPD","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><div id="kanpur">
<div class="tabular">
<table id="TBL-13" class="tabular" cellpadding="0" cellspacing="0">
    

<tr id="TBL-13-1-">
<td id="TBL-13-1-1" class="td11"><a id="x1-5r4" name="x1-5r4"></a> <span class="cmssbx-10x-x-600">D</span></td>
<td id="TBL-13-1-2" class="td11">
<div class="tabular">
<table id="TBL-14" class="tabular" cellpadding="0" cellspacing="0">
   

<tr id="TBL-14-1-">
<td id="TBL-14-1-1" class="td11"><span class="cmssbx-10x-x-172">A New Number System</span></td>
</tr>
<tr id="TBL-14-2-">
<td id="TBL-14-2-1" class="td11">
<div class="tabular">
<table id="TBL-15" class="tabular" cellpadding="0" cellspacing="0">
    

<tr id="TBL-15-1-">
<td id="TBL-15-1-1" class="td10">Input file:</td>
<td id="TBL-15-1-2" class="td01"><span class="cmtt-10x-x-109">stdin</span></td>
</tr>
<tr id="TBL-15-2-">
<td id="TBL-15-2-1" class="td10">Output file:</td>
<td id="TBL-15-2-2" class="td01"><span class="cmtt-10x-x-109">stdout</span></td>
</tr>
<tr id="TBL-15-3-">
<td id="TBL-15-3-1" class="td10"></td>
</tr>

</table>
</div>
</td>
</tr>

</table>
</div>
</td>
</tr>
<tr id="TBL-13-2-">
<td id="TBL-13-2-1" class="td11"></td>
</tr>

</table>
</div>

<p class="noindent">As we know, in an <span class="cmmi-10x-x-109">n</span>-based     number system, there are n different types of digits. In this way, a 1-based number     system has only 1 type of digit, the ‘0’. Here are the rules to interpret     1-based numbers. Each number consists of some space separated blocks of 0. A block     may have 1, 2 or more 0s. There is a ‘flag’ variable associated with each     number</p>
<ul class="itemize1">
<li class="itemize">A block with a single 0 sets ‘flag’ variable to       1</li>
<li class="itemize">A block with two 0s sets the ‘flag’ to 0</li>
<li class="itemize">If there are <span class="cmmi-10x-x-109">n</span> (<span class="cmmi-10x-x-109">n &gt;</span> 2) 0s in a block, <span class="cmmi-10x-x-109">n-2</span> binary digits with the current value of flag is appended       to your number.</li>
</ul>

<p class="noindent">Note that, the first block of every number will have at most 2     0s. For example, the 1-base number 0 0000 00 000 0 0000 is equivalent to binary     11011.</p>
<ul class="itemize1">
<li class="itemize">1st block sets the flag to 1.</li>
<li class="itemize">2nd block has 4 0s. So append flag(= 1) 4 - 2 = 2 times (11).</li>
<li class="itemize">3rd block has 2 0s. Set the flag to 0</li>
<li class="itemize">4th block has 3 0s. Append flag(= 0) 3 <span class="cmsy-10x-x-109">−</span> 2 = 1 time (110).</li>
<li class="itemize">5th block has a single 0. Set flag = 1</li>
<li class="itemize">6th and block has 4 0s. Append flag(= 0) 4 <span class="cmsy-10x-x-109">−</span> 2 = 2 times (11011).</li>
</ul>

<p class="noindent">The final binary number wont have more than 30 digits. Once,     youve completed the process, convert the binary value to decimal &amp; print, youre     done! </p>
<p class="noindent"><span class="cmssbx-10x-x-144">Input</span> </p>
<p class="noindent">Input will have at most 100 test cases. Each case consists of a     1-based number as described above. A number may be spanned to multiple lines but a     single block will always be in a single line. Termination of a case will be indicated     by a single ‘#’ char which will be space-separated from the last digit of     your input number. The last case in the input is followed by a ‘<span class="cmsy-10x-x-109">∼</span>’ character indicating, end of input.      </p>
<p class="noindent"><span class="cmssbx-10x-x-144">Output</span> </p>
<p class="noindent">For each test case, output a single line with the decimal     equivalent value of your given 1-based number. </p>
<p class="noindent"><span class="cmssbx-10x-x-144">Sample input and output</span> </p>
<p class="noindent"> </p>
<div class="obeylines-v">
<div class="tabular">
<table id="TBL-16" class="tabular" cellpadding="0" cellspacing="0" rules="groups">
      

<tr class="hline">
<td>
<hr />
</td>
<td>
<hr />
</td>
</tr>
<tr id="TBL-16-1-">
<td id="TBL-16-1-1" class="td11">
<div class="multicolumn"><span class="cmtt-10x-x-109">stdin</span></div>
</td>
<td id="TBL-16-1-2" class="td11">
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
<tr id="TBL-16-2-">
<td id="TBL-16-2-1" class="td11">
<div class="minipage">
<p class="noindent"><span class="cmtt-10x-x-109">0</span> <span class="cmtt-10x-x-109">0000</span> <span class="cmtt-10x-x-109">00</span> <span class="cmtt-10x-x-109">000</span> <span class="cmtt-10x-x-109">0</span> <span class="cmtt-10x-x-109">0000</span> <span class="cmtt-10x-x-109">#</span> </p>
<p class="noindent"><span class="cmtt-10x-x-109">0</span> <span class="cmtt-10x-x-109">000</span> <span class="cmtt-10x-x-109">#</span> </p>
<p class="noindent"><span class="cmsy-10x-x-109">∼</span></p>
</div>
</td>
<td id="TBL-16-2-2" class="td11">
<div class="minipage">
<p class="noindent"><span class="cmtt-10x-x-109">27</span></p>

<p class="noindent"><span class="cmtt-10x-x-109">1</span></p>
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
<tr id="TBL-16-3-">
<td id="TBL-16-3-1" class="td11"></td>
</tr>

</table>
</div>
</div>
</div>
<p></p>    
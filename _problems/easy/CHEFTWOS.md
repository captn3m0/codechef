---
{"category_name":"easy","problem_code":"CHEFTWOS","problem_name":"Chef and Two String","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"alex_2oo8","date_added":"11-06-2016","tags":{"0":"berezin","1":"dynamic","2":"easy","3":"oct16"},"editorial_url":"http://discuss.codechef.com/problems/CHEFTWOS","time":{"view_start_date":1476696600,"submit_start_date":1476696600,"visible_start_date":1476696600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/mandarin/CHEFTWOS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/russian/CHEFTWOS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/vietnamese/CHEFTWOS.pdf">Vietnamese</a> as well.</h3>

<p>Chef's loves his dog so much! Once his dog created two strings <b>a</b> and <b>b</b> each of length <b>n</b> consisting of digits <b>1</b> and <b>2</b>, and even a problem about them!</p>

<p>Chef's Dog will tell by barking if a string <b>x</b> (also containing only digits <b>1</b> and <b>2</b> and with length <b>N</b>) is <b>good</b> or not by performing the following actions.
<ul>
<li>It starts at first digit of the string, i.e. at <b>i = 1</b>. </li>
<li>It can move from digit <b>i</b> to either <b>i - 1</b> or <b>i + 1</b> if <b>x<sub>i</sub></b> equals <b>1</b> and the corresponding digits exist. </li>
<li>It can move from digit <b>i</b> to either <b>i - 2</b> or <b>i + 2</b> if <b>x<sub>i</sub></b> equals <b>2</b> and the corresponding digits exist. </li>
<li>It <b>must</b> visit each digit <b>exactly</b> once. </li>
<li>It <b>must</b> finish at the last digit (<b>X<sub>N</sub></b>). </li>
</ul>
</p>

<p>Chef's dog wants to make both the strings <b>a</b> and <b>b</b> <i>good</i> by choosing some subset <b>S</b> (possibly empty) of indices of set <b>{1, 2, ..., n}</b> and swapping each index <b>i ϵ S</b> between string <b>a</b> and <b>b</b>, i.e. swapping <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b>. Can you find how many such subsets <b>S</b> exist out there? As the answer could be large, output it modulo <b>10<sup>9</sup> + 7</b>.</p>  

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line contains string <b>a</b>.</p>
<p>The second line contains string <b>b</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing answer of the problem.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>|a| = |b|</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>'1'</b> ≤ <b>a<sub>i</sub>, b<sub>i</sub></b> ≤ <b>'2'</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (30 points) <b>|a|, |b|</b> ≤  </b>10</b></li> 
<li>Subtask #2 (70 points) <b>original constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
1111
2211
222
111

<b>Output:</b>
8
0
</pre>

<h3>Explanation</h3>
<p><b>Test case 1.</b>
Possible subsets are: 
<b>{}</b>, <b>{1, 2}</b>, <b>{1, 2, 3}</b>, <b>{1, 2, 4}</b>, <b>{1, 2, 3, 4}</b>, <b>{3}</b>, <b>{4}</b>, <b>{3, 4}</b>.
</p>
<p><b>Test case 2.</b> There are no possible sets <b>S</b> which can make both the strings good.
</pre>
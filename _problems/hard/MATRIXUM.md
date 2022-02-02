---
{"category_name":"hard","problem_code":"MATRIXUM","problem_name":"Matrix Sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":null,"date_added":"20-06-2017","tags":{"0":"alex_2oo8"},"time":{"view_start_date":1498908900,"submit_start_date":1498908900,"visible_start_date":1498908900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKFL17/mandarin/MATRIXUM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/russian/MATRIXUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/vietnamese/MATRIXUM.pdf">Vietnamese</a> as well.</h3>

<p>We call an <b>N</b> × <b>M</b> matrix <i>nice</i>, if it satisfies both these conditions:</p>

<ul>
<li>Each of its elements is either a 0 or a 1.</li>
<li>We define two cells of the matrix to be <i>adjacent</i>, if they share a side. All the cells containing a 1 should form a single connected component.
<p>More formally: You should be able to reach any cell containing a 1 from any other cell containing a 1 through a sequence of steps, where a single step consists of moving from one cell containing a 1, to an adjacent cell containing a 1. </p></li>
</ul>
<p></p>

<p>You are given an <b>N</b> × <b>M</b> matrix <b>A</b>, and each of its elements is either a 0 or a 1. You want to decompose <b>A</b> into some <i>terms</i>, where each term is a sign ( + or - ) followed by a nice matrix. In other words, you want to write <b>A</b> as the addition and subtraction of some nice matrices.</p> 

<p>For example, you could write <b>A</b> = + B<sub>1</sub> + B<sub>2</sub> - B<sub>3</sub> + B<sub>4</sub> - B<sub>5</sub>, where each B<sub>i</sub> is a nice matrix. Note that even though every single B<sub>i</sub> and their total sum (which equals <b>A</b>) has only elements 0 and 1, some prefix sum could have other elements. For example, the matrix corresponding to + B<sub>1</sub> + B<sub>2</sub> - B<sub>3</sub> could have elements which are neither 0 nor 1.</p>

<p>Find the smallest number of nice matrices needed to decompose <b>A</b> in the manner described above and output them. If there are multiple ways to do this, you can output any one optimal decomposition.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. </p>
<p>The first line of every test case contains two integers, <b>N</b> and <b>M</b>, which denote the number of rows and number of columns respectively.</p>
<p>The i-th of the following <b>N</b> lines contains a string of length <b>M</b> and consisting only of characters '0' and '1', which denotes the i-th row of the matrix <b>A</b>.</p>

<h3>Output</h3>
<p>For each test case, first output a line with a single integer <b>k</b>, which denotes the smallest number of nice matrices needed to decompose <b>A</b>.</p>
<p>This should be followed by <b>k</b> * (<b>N</b> + 1) lines, which correspond to the <b>k</b> terms.</p>
<p>Each term should have <b>N</b> + 1 lines. The first line of each term should contain either a '+' or a '-', which denotes whether the following nice matrix is to be added or subtracted. The following <b>N</b> lines should denote the <b>N</b> rows of the nice matrix, with each line containing a string of length <b>M</b>.</p>

<h3>Constraints</h3>
<ul>
  <li>1 ≤ <b>T</b> ≤ 10<sup>3</sup></li>
  <li>1 ≤ <b>N, M</b> ≤ 20</li>
  <li>There will be at most 100 test cases where <b>N</b> > 10 or <b>M</b> > 10.</li>
  <li>The matrix <b>A</b> is guaranteed to have at least one non-zero element.</li>
</ul>
<p> </p>

<h3>Example</h3>
<pre><b>Input:</b>
1
3 4
1010
0101
1010

<b>Output:</b>
3
-
0000
0010
0000
+
1010
1111
1010
-
0000
1000
0000
</pre>
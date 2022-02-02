---
{"category_name":"easy","problem_code":"NDIFFPAL","problem_name":"N different palindromes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"kevinsogo,antoniuk1","date_added":"31-05-2016","tags":{"0":"ad","1":"dynamic","2":"easy","3":"palindrome","4":"snckpa16","5":"strings","6":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/NDIFFPAL","time":{"view_start_date":1465140600,"submit_start_date":1465140600,"visible_start_date":1465140600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA16/mandarin/NDIFFPAL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA16/russian/NDIFFPAL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA16/vietnamese/NDIFFPAL.pdf">Vietnamese</a> as well.</h3>


<p>A palindrome is a string that reads same in both directions: forwards and backwards. For example, the strings <b>radar</b> and <b>noon</b> are palindromes, whereas the string <b>chef</b> is not a palindrome as being read backwards is becomes equal to <b>fehc</b>, which is not equal to <b>chef</b>.</p>

<p>Let's say that the pair of indices <b>(i, j)</b> <i>denotes a palindrome</i> in some string <b>S</b> iff <b>i ≤ j</b> and the substring starting at the <b>i</b>-th character and ending at the <b>j</b>-th character of <b>S</b> is a palindrome.</p> 

<p>Given an integer <b>N</b>. Your task is to construct a string <b>S</b> such that there are exactly <b>N</b> different pairs <b>(i, j)</b> that denotes a palindrome.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the sought number of pairs that denote palindrome. </p>

<h3>Output</h3>
<p>For each test case, output a single line containing a string <b>S</b>, consisting of lowecase Latin letters, and having exactly <b>N</b> distinct palindrome-denoting pairs. If there's a few such strings, output any one.</p>

<p>If such string <b>S</b> doesn't exist, output <b>-1</b> instead of it.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
6
7
2
</tt>
<b>Output:</b>
<tt>noon
radar
ab</tt></pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> In the string "noon", the pairs that denote a palindrome are (1-indexed): <b>(1, 1), (1, 4), (2, 2), (2, 3), (3, 3), (4, 4)</b>.</p>
<p><b>Example case 2.</b> In the string "radar", the pairs that denote a palindrome are (1-indexed): <b>(1, 1), (1, 5), (2, 2), (2, 4), (3, 3), (4, 4), (5, 5)</b>.</p>
<p><b>Example case 3.</b> In the string "ab", the pairs denoting a palindrome are : <b>(1, 1), (2, 2)</b></p>
---
{"category_name":"hard","problem_code":"DUALPAL","problem_name":"Chef and the Dual Palindromes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":8,"source_sizelimit":8000,"problem_author":"rustinpiece","problem_tester":"iscsi","date_added":"31-07-2015","tags":{"0":"backtracking","1":"cook61","2":"hard","3":"maths","4":"rustinpiece"},"editorial_url":"http://discuss.codechef.com/problems/DUALPAL","time":{"view_start_date":1440357600,"submit_start_date":1440357600,"visible_start_date":1440357600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK61/mandarin/DUALPAL.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK61/russian/DUALPAL.pdf">Russian</a> as well.</h3>
<p>A number is called a <em>Dual Palindrome</em> if it's representation in bases <b>B1</b> and <b>B2</b> are both palindromes.  e.g. Let  <b>B1</b> = 3, <b>B2</b> = 4, then number 130 (in base 10) will be called a <em>Dual Palindrome</em>, as it is palindrome in base 3 (11211) as well as in base 4 (2002). However, it is not a <em>Dual Palindrome</em> for <b>B1</b> = 3 and <b>B2</b> = 5 as it's not a palindrome in base 5(1010).</p>
<p>Given two integers <b>B1</b> and <b>B2</b>, Chef wants to find Dual Palindromes less than <b>2<sup>60</sup></b>. If there are more than 1000 Dual Palindromes, then output the first 1000 only (these numbers should be in base 10).</p>
<h3>Input</h3>
<p>The fine line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p> Each test case consists of a single line containing two space separated integers: <b>B1</b> and <b>B2</b>, respectively.</p>
<h3>Output</h3>
<p>For each test case, output a list of space separated integers which are Dual Palindromes less than <b>2<sup>60</sup></b> for the input bases. If there are more than 1000 Dual Palindromes, then output the first 1000 only. The numbers should be printed in an ascending order.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li> <b>2</b> ≤ <b>B1</b> &lt; <b>B2</b> ≤ <b>16</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
2 3

<b>Output:</b>
1 6643 1422773 5415589 90396755477 381920985378904469
</pre><h3>Note</h3>
<p>Source limit for the problem is 8000B instead of usual 50000B.</p>

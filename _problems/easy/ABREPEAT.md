---
{"category_name":"easy","problem_code":"ABREPEAT","problem_name":"Bear and AB","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"mnbvmar","date_added":"23-04-2017","tags":{"0":"combinatorics","1":"cook81","2":"errichto","3":"simple"},"editorial_url":"https://discuss.codechef.com/problems/ABREPEAT","time":{"view_start_date":1492972200,"submit_start_date":1492972200,"visible_start_date":1492972200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/mandarin/ABREPEAT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/russian/ABREPEAT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/vietnamese/ABREPEAT.pdf">Vietnamese</a> as well.</h3>


<p>Limak has a string <b>S</b>, that consists of <b>N</b> lowercase English letters.
Limak then created a new string by repeating <b>S</b> exactly <b>K</b> times.
For example, for <b>S</b> = "abcb" and <b>K</b> = 2, he would get "abcbabcb".</p>

<p>Your task is to count the number of subsequences "ab" (not necessarily consecutive) in the new string.</p>

<p>In other words, find the number pairs of indices i < j, such that the i-th and j-th characters in the new string are 'a' and 'b' respectively.</p>



<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains two integers <b>N</b> and <b>K</b>, denoting the length of the initial string <b>S</b> and the number of repetitions respectively.</p>

<p>The second line contains a string <b>S</b>.
Its length is exactly <b>N</b>, and each of its characters is a lowercase English letter.</p>



<h3>Output</h3>

<p>For each test case, output a single line containing one integer — the number of subsequences "ab" in the new string.
For the given constraints, it can be proved that the answer fits in the 64-bit signed type.</p>



<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>N</b> * <b>K</b> ≤ 10<sup>9</sup> (in other words, the new string has length up to 10<sup>9</sup>)</li>
</ul>


<h3>Example</h3>

<pre><b>Input:</b>
3
4 2
abcb
7 1
aayzbaa
12 80123123
abzbabzbazab

<b>Output:</b>
6
2
64197148392731290
</pre>



<h3>Explanation</h3>

<p><b>Test case 1.</b> Limak repeated the string "abcb" 2 times, and so he got "abcbabcb". There are 6 occurrences of the subsequence "ab":</p>

<ul>
<li>ABcbabcb (the two letters marked uppercase)</li>
<li>AbcBabcb</li>
<li>AbcbaBcb</li>
<li>AbcbabcB</li>
<li>abcbABcb</li>
<li>abcbAbcB</li>
</ul>

<p><b>Test case 2.</b> Since <b>K</b> = 1, the new string is equal to the given <b>S</b> ("aayzbaa"). There are 2 occurrences of the subsequence "ab" in this string: AayzBaa and aAyzBaa.</p>
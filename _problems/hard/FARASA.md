---
{"category_name":"hard","problem_code":"FARASA","problem_name":"Furik and Rubik and Sub Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"2 - 4","source_sizelimit":50000,"problem_author":"sereja","problem_tester":"gamabunta","date_added":"7-05-2013","tags":{"0":"fft","1":"hard","2":"july13","3":"maths","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/FARASA","time":{"view_start_date":1373880600,"submit_start_date":1373880600,"visible_start_date":1373880600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Furik and Rubik are playing the game <b>Sub array</b>. This game is played over an <b>array of integers</b>, consisting of <b>N</b> elements.</p>
<p>
In this game, Furik decides an integer that is equal to <b>sum</b> of some <b>sub-array</b> of this array and Rubik wants to guess this number.</p>
<p>
But, since Rubik is a busy man, he wants to know how many times in the worst case he will have to try to guess this number. You may assume he acts optimally, i.e. he doesn't call the same number twice, and calls only those numbers, that might have been decided by Furik, meaning, the sum of some or the other <b>sub-array</b>.</p>
<p>
Let's call the array <b>b</b>, sub-array of the array <b>a</b>, if there are numbers <b>l</b> and <b>r</b> such, that <b>b<sub>1</sub> = a<sub>l</sub> AND b<sub>2</sub> = a<sub>l+1</sub> AND ... b<sub>|b|</sub> = a<sub>r</sub></b>, where <b>|b|</b> is the length of the array <b>b</b>.
</p>
<h3>Input</h3>
<p>
The first line contains the positive integer <b>N</b>. The second line contains <b>N</b> positive integers, which are the elements of the array.</p>
<h3>Output</h3>
<p>
Output a single line containing the answer to the problem.</p>
<h3>Constraints</h3>
<p>
<b>Test Files with Time Limit set to 2 seconds</b><br />
<b>1 ≤ N * S ≤ 10<sup>10</sup></b>, where <b>S</b> is the sum of the elements in the array.</p>
<p><b>Test Files with Time Limit set to 4 seconds</b><br />
<b>1 ≤ N * S ≤ 4 * 10<sup>10</sup></b>
</p>
<h3>Sample</h3>
<pre>
<b>Input</b>
3
1 2 3

<b>Output</b>
4

<b>Input</b>
9
6 1 7 3 7 1 8 5 7

<b>Output</b>
28

</pre><h3>Explanation</h3>
<p><b>Test Case 1:</b> Furik can decide one of the following numbers: 1, 2, 3, 5, 6. For example, let us assume Furik has decided 3. In the worst case, Rubik may call out 4 numbers, since there are only 5 such numbers.</p>

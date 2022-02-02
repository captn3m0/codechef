---
{"category_name":"easy","problem_code":"RESQ","problem_name":"Arranging Cup-cakes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"shettynamit","problem_tester":"anton_lunyov","date_added":"16-05-2012","tags":{"0":"factors","1":"june12","2":"prime","3":"shettynamit","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/RESQ","time":{"view_start_date":1339403781,"submit_start_date":1339403781,"visible_start_date":1339403781,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> Our Chef is catering for a big corporate office party and is busy preparing different mouth watering dishes. The host has insisted that he serves his delicious cupcakes for dessert. </p>

<p> On the day of the party, the Chef was over-seeing all the food arrangements as well, ensuring that every item was in its designated position. The host was satisfied with everything except the cupcakes. He noticed they were arranged neatly in the shape of a rectangle. He asks the Chef to make it as square-like as possible. </p>

<p> The Chef is in no mood to waste his cupcakes by transforming it into a perfect square arrangement. Instead, to fool the host, he asks you to arrange the <b>N</b> cupcakes as a rectangle so that the <b>difference</b> between the length and the width is minimized. </p>

<h3>Input</h3>
<p>The first line of the input file contains an integer <b>T</b>, the number of test cases. Each of the following <b>T</b> lines contains a single integer <b>N</b> denoting the number of cupcakes.

<h3>Output</h3>
<p>Output <b>T</b> lines, each indicating the minimum possible difference between the length and the width in a rectangular arrangement of the cupcakes.

<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 100</p><p>
1 ≤ <b>N</b> ≤ 10<sup>8</sup>
</p>
<h3>Example</h3>

<pre>
<b>Input:</b>
4
20
13
8
4

<b>Output:</b>
1
12
2
0
</pre>

<h3>Explanation </h3>
<p><b>Case 1</b>: 20 cupcakes can be arranged in 6 possible ways -  1 x 20, 2 x 10, 4 x 5, 5 x 4, 10 x 2 and 20 x 1. The corresponding differences between the length and the width are 19, 8, 1, 1, 8 and 19 respectively. Hence, 1 is the answer.</p>

<p><b>Case 4</b>: 4 cupcakes can be arranged as a 2 x 2 square. Difference between the length and the width is 0. You can't do anything better than 0.</p>

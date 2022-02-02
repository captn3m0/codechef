---
{"category_name":"medium","problem_code":"GIVCANDY","problem_name":"Sharing Candies","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"xcwgf666,antoniuk1","date_added":"31-05-2016","tags":{"0":"bezout","1":"euclids","2":"gcd","3":"kevinsogo","4":"linear","5":"simple","6":"snckpa16"},"editorial_url":"http://discuss.codechef.com/problems/GIVCANDY","time":{"view_start_date":1465140600,"submit_start_date":1465140600,"visible_start_date":1465140600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="/download/translated/SNCKPA16/mandarin/GIVCANDY.pdf">Mandarin Chinese</a>, <a target="_blank" href="/download/translated/SNCKPA16/russian/GIVCANDY.pdf">Russian</a> and <a target="_blank" href="/download/translated/SNCKPA16/vietnamese/GIVCANDY.pdf">Vietnamese</a> as well.</h3>
<p>Alvin and Berto have gotten tired of eating chocolates, so now they have decided to eat candies instead.</p>
<p>Alvin has <b>A</b> apple candies, and Berto has <b>B</b> banana candies. (I know, they have weird tastes.) Alvin and Berto always wants the split of candies to be as fair as possible. The problem is, Alvin only wants apple candies and Berto only wants banana candies!</p>
<p>Here comes Chef to the rescue! Chef bought an infinite number of candy packs. There are two types of packs:</p>
<ul>
<li>Packs containing exactly <b>C</b> apple candies.</li>
<li>Packs containing exactly <b>D</b> banana candies.</li>
</ul>
<p>Chef wants to give some (could be zero) apple candy packs to Alvin and some (could be zero) banana candy packs to Berto in such a way that <i>the absolute difference between the number of candies they have is minimized</i>. What is this minimum absolute difference?</p>
<p>Note that Chef doesn't want to open any pack; he gives each pack in full.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case consists of a single line containing four integers <b>A</b>, <b>B</b>, <b>C</b>, and <b>D</b> separated by single spaces.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing a single integer, the minimum absolute difference between the number of candies they can have.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>A</b>, <b>B</b>, <b>C</b>, <b>D</b> ≤ <b>10<sup>14</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
1 5 10 3
1 2 2 2
</tt>
<b>Output:</b>
<tt>0
1
</tt></pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> In this test case, Alvin has 1 candy and Berto has 5. The apple candies come in packs of 10, and the banana ones come in packs of 3. In this situation, Chef can make them equal by giving 1 pack of 10 to Alvin and 2 packs of 3 to Berto, so they now have 1 + 10 = 5 + 3 + 3 = 11 candies each.</p>
<p><b>Example case 2.</b> In this test case, Alvin has 1 candy and Berto has 2. The apple and banana candies come in packs of 2. In this situation, the number of candies of Alvin is always odd, and the number of candies of Berto is always even, so Chef cannot make them equal. The minimum difference is 1, which Chef can achieve by not giving any packs at all.</p>
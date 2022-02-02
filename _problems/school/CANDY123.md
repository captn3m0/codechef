---
{"category_name":"school","problem_code":"CANDY123","problem_name":"Bear and Candies 123","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"mnbvmar","date_added":"22-04-2017","tags":{"0":"cakewalk","1":"cook81","2":"errichto"},"editorial_url":"https://discuss.codechef.com/problems/CANDY123","time":{"view_start_date":1492972200,"submit_start_date":1492972200,"visible_start_date":1492972200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/mandarin/CANDY123.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/russian/CANDY123.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK81/vietnamese/CANDY123.pdf">Vietnamese</a> as well.</h3>


<p>Bears love candies and games involving eating them. Limak and Bob play the following game. Limak eats 1 candy, then Bob eats 2 candies, then Limak eats 3 candies, then Bob eats 4 candies, and so on. Once someone can't eat what he is supposed to eat, he loses.</p>

<p>Limak can eat at most <b>A</b> candies in total (otherwise he would become sick), while Bob can eat at most <b>B</b> candies in total.
Who will win the game?
Print "Limak" or "Bob" accordingly.</p>


<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The only line of each test case contains two integers <b>A</b> and <b>B</b> denoting the maximum possible number of candies Limak can eat and the maximum possible number of candies Bob can eat respectively.</p>



<h3>Output</h3>

<p>For each test case, output a single line containing one string — the name of the winner ("Limak" or "Bob" without the quotes).</p>



<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 1000</li>
<li>1 ≤ <b>A, B</b> ≤ 1000</li>
</ul>



<h3>Example</h3>

<pre><b>Input:</b>
10
3 2
4 2
1 1
1 2
1 3
9 3
9 11
9 12
9 1000
8 11

<b>Output:</b>
Bob
Limak
Limak
Bob
Bob
Limak
Limak
Bob
Bob
Bob
</pre>



<h3>Explanation</h3>

<p><b>Test case 1.</b> We have <b>A</b> = 3 and <b>B</b> = 2. Limak eats 1 candy first, and then Bob eats 2 candies. Then Limak is supposed to eat 3 candies but that would mean 1 + 3 = 4 candies in total. It's impossible because he can eat at most <b>A</b> candies, so he loses. Bob wins, and so we print "Bob".</p>

<p><b>Test case 2.</b> Now we have <b>A</b> = 4 and <b>B</b> = 2. Limak eats 1 candy first, and then Bob eats 2 candies, then Limak eats 3 candies (he has 1 + 3 = 4 candies in total, which is allowed because it doesn't exceed <b>A</b>). Now Bob should eat 4 candies but he can't eat even a single one (he already ate 2 candies). Bob loses and Limak is the winner.</p>

<p><b>Test case 8.</b> We have <b>A</b> = 9 and <b>B</b> = 12. The game looks as follows:</p>

<ul>
<li>Limak eats 1 candy.</li>
<li>Bob eats 2 candies.</li>
<li>Limak eats 3 candies (4 in total).</li>
<li>Bob eats 4 candies (6 in total).</li>
<li>Limak eats 5 candies (9 in total).</li>
<li>Bob eats 6 candies (12 in total).</li>
<li>Limak is supposed to eat 7 candies but he can't — that would exceed <b>A</b>. Bob wins.</li>
</ul>
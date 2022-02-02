---
{"category_name":"easy","problem_code":"KPRIME","problem_name":"Count K-Primes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"gamabunta","date_added":"3-06-2013","tags":{"0":"july13","1":"memoization","2":"sieve","3":"simple","4":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/KPRIME","time":{"view_start_date":1373880775,"submit_start_date":1373880775,"visible_start_date":1373880775,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">Alice and Bob are studying for their class test together. The topic of the test is <i>Prime Numbers</i>. The preparation is getting too boring for their liking. To make it interesting, they turn it into a game. The winner will get an ice-cream treat from the other. </p>

<p style="text-align:justify">The game is called <i>Count K-Primes</i>. A number is a <b>k</b>-prime if it has exactly <b>k</b> <i>distinct</i> prime factors. The game is quite simple. Alice will give three numbers <b>A</b>, <b>B</b> & <b>K</b> to Bob. Bob needs to tell Alice the number of <b>K</b>-prime numbers between <b>A</b> & <b>B</b> (both inclusive). If Bob gives the correct answer, he gets a point. If not, Alice gets a point. They play this game <b>T</b> times.</p>

<p style="text-align:justify">Bob hasn't prepared so well. But he really wants to win the game. He wants you to tell him the correct answer.</p>

<h3>Input</h3>
<p style="text-align:justify">First line of input contains a single integer <b>T</b>, the number of times they play. Each game is described in a single line containing the three numbers <b>A</b>,<b>B</b> & <b>K</b>.</p>

<h3>Output</h3>
<p style="text-align:justify">For each game, output on a separate line the number of <b>K</b>-primes between <b>A</b> & <b>B</b>.</p>

<h3>Constraints:</h3>
<p><b>1 ≤ T ≤ 10000</b><br />
<b>2 ≤ A ≤ B ≤ 100000</b><br />
<b>1 ≤ K ≤ 5</b>
</p>

<h3>Example:</h3>

<pre>
<b>Input</b>
4
2 5 1
4 10 2
14 15 2
2 20 3

<b>Output</b>
4
2
2
0

</pre>

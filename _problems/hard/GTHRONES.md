---
{"category_name":"hard","problem_code":"GTHRONES","problem_name":"A Game of Thrones","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"yellow_agony","problem_tester":"laycurse","date_added":"8-07-2012","tags":{"0":"aug12","1":"flow","2":"hard","3":"matching","4":"yellow_agony"},"editorial_url":"http://discuss.codechef.com/problems/GTHRONES","time":{"view_start_date":1344677937,"submit_start_date":1344677937,"visible_start_date":1344677400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Bran and Tyrion are the last two high lords fighting for the Iron Throne. With a mutual agreement that included all knights of the realm, it was decided to settle the issue with a game of thrones, of course not a game of swords but a game of numbers, after all one of them is a cripple and other is a dwarf. Seven wisest men of the realm came forward and forged rules of this game which are as follows :

<ol>
<li>Initially <b>N</b> numbers were written down on a notebook (possibly with multiple copies of every number).</li><br/>
<li>Players alternate their turns with Bran playing first.</li><br/>
<li>In the first turn Bran gets to choose a number of his choice from the numbers written on the notebook and declare it as the current number of the game. </li><br/>
<li>After that in every move this is what they do : let's say the current number of the game is <b>u</b>. They erase <b>u</b> from the notebook (if u was written multiple times, they erase it only once) and declare one of the numbers still written on the notebook <b>v</b> as current number of the game. <b>v</b> can be chosen iff prime factorization of <b>u</b> and <b>v</b> differ by exactly 1 prime factor. ( Read notes for a more formal definition)</li><br/>
<li>The player who can't make a move loses the game. </li><br/><br/>
</ol>

<p>You're one of Varys' spider and he has asked you to predict the outcome of this game beforehand so that he can devise future strategy. So you've to find out who has a winning strategy assuming both players play optimally.

<p><b>Notes: </b> <br/>

1) <b>v</b> can be chosen after <b>u</b> iff either of the following conditions hold :<br/>

<ol>
<li><b>v</b> > <b>u</b> and <b>u</b> | <b>v</b> and (<b>v</b> / <b>u</b>) is prime <br/></li>
<li><b>u</b> > <b>v</b> and <b>v</b> | <b>u</b> and (<b>u</b> / <b>v</b>) is prime <br/><br/></li>
</ol>
2) A natural number if prime if it has exactly two distinct positive factors. 1 is not a prime number. <br/>

<h3>Input</h3>
<p>First line of the input contains a single integer <b>N</b> denoting number of
different numbers written in the notebook. Then follow <b>N</b> lines. Each of
the following lines contain two space separated integers : <b>u<sub>i</sub></b>
and <b>c<sub>i</sub></b> where <b>u<sub>i</sub></b>
is the i<sup>th</sup> distinct integer written on notebook and it has been repeated <b>c<sub>i</sub></b>
number of times.

<h3>Output</h3>
<p>Your program should print Bran if he has a a winning strategy else it should print Tyrion. Also in case Bran could win, your program must output the smallest number Bran could choose in the first turn to ensure a win. See sample output for details. 

<h3>Example</h3>

<pre>
<b>Input:</b>
3
2 3
14 3
21 2

<b>Output:</b>
Bran 21
</pre>

<h3>Constraints:</h3>
1 <= <b>N</b> <= 500<br/>
1 <= <b>u<sub>i</sub></b>
<= 10^18<br/>
1 <= <b>c<sub>i</sub></b>
<= 10^9<br/>
All <b>u<sub>i</sub></b>
are distinct.<br/>
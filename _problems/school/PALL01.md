---
{"category_name":"school","problem_code":"PALL01","problem_name":"The Block Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"karthikv1392","problem_tester":null,"date_added":"29-04-2015","tags":{"0":"karthikv1392"},"time":{"view_start_date":1436519986,"submit_start_date":1436519986,"visible_start_date":1436519986,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> </p>
<p>The citizens of Byteland regularly play a game. They have blocks each denoting some integer from 0 to 9. These are arranged together in a random manner without seeing to form different numbers keeping in mind that the first block is never a 0. Once they form a number they read in the reverse order to check if the number and its reverse is the same. If both are same then the player wins. We call such numbers <i>palindrome</i> </p>
<p>Ash happens to see this game and wants to simulate the same in the computer. As the first step he wants to take an input from the user and check if the number is palindrome and declare if the user wins or not </p>
<h3>Input</h3>
<p>
The first line of the input contains T, the number of test cases. This is followed by T lines containing an integer N.
</p>
<h3>Output</h3>
<p>
For each input output "wins" if the number is a palindrome and "losses" if not.
</p>
<h3>Constraints</h3>
<p>
1&lt;=T&lt;=20 <br />
1&lt;=N&lt;=10000 
</p>
<pre><b>Input:</b>
3
331
666
343

<b>Output:</b>
losses
wins
wins
</pre><p> </p>

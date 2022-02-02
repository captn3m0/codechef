---
{"category_name":"easy","problem_code":"CHEFSOCK","problem_name":"Chef and Socks","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"6-02-2016","tags":{"0":"cakewalk","1":"ltime33","2":"mgch"},"editorial_url":"http://discuss.codechef.com/problems/CHEFSOCK","time":{"view_start_date":1456592400,"submit_start_date":1456592400,"visible_start_date":1456592400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/mandarin/CHEFSOCK.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/russian/CHEFSOCK.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/vietnamese/CHEFSOCK.pdf">Vietnamese</a> as well.</h3>


<p>
Today, Chef woke up to find that he had no clean socks. Doing laundry is such a turn-off for Chef, that in such a situation, he always buys new socks instead of cleaning the old dirty ones. He arrived at the fashion store with <b>money</b> rupees in his pocket and started looking for socks. Everything looked good, but then Chef saw a new jacket which cost <b>jacketCost</b> rupees. The jacket was so nice that he could not stop himself from buying it.</p>
<p>
Interestingly, the shop only stocks one kind of socks, enabling them to take the unsual route of selling single socks, instead of the more common way of selling in pairs. Each of the socks costs <b>sockCost</b> rupees.
</p>
<p>
Chef bought as many socks as he could with his remaining money. It's guaranteed that the shop has more socks than Chef can buy. But now, he is interested in the question: will there be a day when he will have only 1 clean sock, if he uses a pair of socks each day starting tommorow? If such an unlucky day exists, output "Unlucky Chef", otherwise output "Lucky Chef". Remember that Chef never cleans or reuses any socks used once.
</p>

<h3>Input</h3>
<p>The first line of input contains three integers — <b>jacketCost, sockCost, money</b> — denoting the cost of a jacket, cost of a single sock, and the initial amount of money Chef has, respectively.

<h3>Output</h3>
<p>In a single line, output "Unlucky Chef" if such a day exists. Otherwise, output "Lucky Chef". </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>jacketCost</b> ≤ <b>money</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>sockCost</b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1 2 3

<b>Output:</b>
Unlucky Chef

<b>Input:</b>
1 2 6

<b>Output:</b>
Lucky Chef

</pre>

<h3>Subtasks</h3>
<ul>
 <li><b>Subtask 1:</b> <b> jacketCost, money, sockCost </b>≤ 10<sup>3</sup>. <b>Points - 20</b></li>
 <li><b>Subtask 2:</b> Original constraints. <b>Points - 80</b></li>
</ul>

<h3>Explanation</h3>
<ul>
<p>Test #1:</p>
<p>When Chef arrived at the shop, he had 3 rupees. After buying the jacket, he has 2 rupees left, enough to buy only 1 sock.</p>
<p>Test #2:</p>
<p>Chef had 6 rupees in the beginning. After buying the jacket, he has 5 rupees left, enough to buy a pair of socks for 4 rupees.</p>
</ul>
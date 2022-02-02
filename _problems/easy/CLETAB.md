---
{"category_name":"easy","problem_code":"CLETAB","problem_name":"Cleaning Tables","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vinayak garg","problem_tester":null,"date_added":"3-07-2014","tags":{"0":"aug14","1":"greedy","2":"simple","3":"vinayak"},"editorial_url":"http://discuss.codechef.com/problems/CLETAB","time":{"view_start_date":1407749400,"submit_start_date":1407749400,"visible_start_date":1407749400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/CLETAB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/CLETAB.pdf">Russian</a>.</h3>
<p>Haku has been newly hired by Chef to clean tables at his restaurant. So whenever a customer wants a table, Haku must clean it.</p>
<p>But Haku happens to be a lazy boy. So in the morning, when the restaurant is opened, all the tables are dirty from night before.</p>
<p>The customer don't leave the table unless they are politely requested to do so. And customers can order meal later again. So if they were already having a table, they can be served on the same table [Haku doesn't have to clean :)]. But if they don't have a table then they must be given some table [Haku must clean :(]</p>
<p>The restaurant has <b>N</b> tables. When a customer requires a table, he/she can occupy any unoccupied table. However if all tables are occupied, then Haku is free to ask politely any customer to leave his/her table. And the freed table can be given to the waiting customer.</p>
<p>Now Chef has the psychic ability to tell the order of customer meal requests for the entire day. Given this list, help Haku find the minimum number of times he has to clean the tables.</p>
<h3>Input</h3>
<p>First line contains integer <b>T</b>, number of test cases.<br />
First line of each test case contains 2 integers <b>N</b>, number of tables and <b>M</b>, number of customer orders. Followed by <b>M</b> integers on next line, which is the order in which customers ask for meal. Customers are referenced by integer <b>C</b>.
</p>
<h3>Output</h3>
<p>For each test case output the minimum number of times Haku must clean the table(s).</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b> ≤ 200</li>
<li>1 ≤ <b>M</b> ≤ 400</li>
<li>1 ≤ <b>C</b> ≤ 400</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
2 4
1 2 3 4
3 2
4 1
3 6
1 2 1 3 4 1
3 5
1 2 1 3 4

<b>Output:</b>
4
2
4
4
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> In the starting all tables i.e. 2 tables are unoccupied. When customer 1 asks for table, he can be given any of the 2 tables. Haku has to clean either of the table. Next customer 2 can occupy the other free table. Haku must clean second time. When customer 3 comes Haku can ask either customer 1 or 2 to leave. Suppose he asks customer 1 to leave. Then he has to clean table for the third time. When customer 4 comes, Haku can ask customer 2 or 3 to leave. In either case Haku will have to clean the table for the fourth time. Phew!!</p>
<p><b>Example case 4.</b> Suppose the tables are listed as [-, -, -]. A possible optimal order of allocating tables can be [1, -, -] -> [1, 2, -] -> [1, 2, -] -> [1, 2, 3] -> [4, 2, 3]. So Haku will have to clean table for order no. 1, 2, 4 and 5. That is 4 times.</p>

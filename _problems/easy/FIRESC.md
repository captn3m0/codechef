---
{"category_name":"easy","problem_code":"FIRESC","problem_name":"Fire Escape Routes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"anton_lunyov","date_added":"3-02-2013","tags":{"0":"dfs","1":"march13","2":"simple","3":"union","4":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/FIRESC","time":{"view_start_date":1363000099,"submit_start_date":1363000099,"visible_start_date":1363000099,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has been constantly expanding his chain of restaurants. It was getting too difficult for him to manage the finances of so many businesses all by himself. So he has opened up a new accounts office and hired people to help him with this task. There are <b>N</b> people working in this building and each one works in a separate cabin. Chef employees are numbered by integers from <b>1</b> to <b>N</b>, inclusive. Chef wants to ensure the safety of his employees. He wants to have fire escapes in the building and wants to train the employees to use these by conducting mock drills.</p>
<p>Chef knows that the number of people working in his office can be very large. In order to avoid crowding of a common fire escape route during emergency, Chef has decided to build multiple fire escapes. For the safety of every employee, each cabin has a fire exit which is connected to one of the fire escape routes.</p>
<p>A lot of employees are friends with each other. The friendship is mutual. This means that if employee <b><i>i</i></b> is a friend of employee <b><i>j</i></b> then employee <b><i>j</i></b> is a friend of employee <b><i>i</i></b> as well. But friendship is NOT necessarily transitive. This means that if employee <b><i>i</i></b> is a friend of employee <b><i>j</i></b> AND employee <b><i>j</i></b> is a friend of employee <b><i>k</i></b>, then employee <b><i>i</i></b> and employee <b><i>k</i></b> need not necessarily be friends.</p>
<p><b>If two employees are friends, they do not want to escape through different routes.</b></p>
<p>This complicates the task for the Chef. As already mentioned, he wants to have the maximum number of fire escape routes to ensure maximum safety. Also, for every escape route, one of the employees using that route needs to be appointed as the fire drill captain. The captain will be responsible for conducting the mock drills and train all the employees using that route. Your task is simple. Given the number of employees and the friendship list, you need to tell the Chef the maximum number of fire escape routes that he can have in the building and the number of ways of selecting the captains for every route. Since the number of ways can be really large, output this value modulo <b>10<sup>9</sup> + 7</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>, denoting the number of employees and the number of friendship relations, respectively. Each of the following <b>M</b> lines contains two space-separated integers <b>i</b> and <b>j</b>, denoting employee <b><i>i</i></b> and employee <b><i>j</i></b> are friends.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing two space separated integers, denoting the maximum number of distinct fire escape routes that can be constructed and the number of ways of selecting the captains modulo <b>10<sup>9</sup> + 7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>1</b> ≤ <b>i</b>, <b>j</b> ≤ <b>N</b></li>
<li><b>i</b> ≠ <b>j</b></li>
<li>For any pair of employees <b><i>i</i></b> and <b><i>j</i></b> such that <b>1</b> ≤ <b>i</b> &lt; <b>j</b> ≤ <b>N</b>, at most one pair among (<b>i</b>, <b>j</b>) and (<b>j</b>, <b>i</b>) will appear in the input</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
4 2
1 2
2 3
5 3
1 2
2 3
1 3
6 3
1 2
3 4
5 6

<b>Output:</b>
2 3
3 3
3 8
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Here employees 1 and 2 are friends and should share the same fire escape. Also employees 2 and 3 share the same fire escape. This means employees 1, 2 and 3 will have a common route. But to maximize number of routes Chef could assign another route to employee 4 since it is not a friend of other employee. So we have two escape routes with the following distribution of employees by routes: {1, 2, 3}, {4}. Therefore, there are 3 ways to chose drill captains: (1, 4), (2, 4), (3, 4), where first element in the pair denotes the captain for the first route and second element denotes the captain for the second route.</p>
<p><b>Example case 2.</b> Here the optimal distribution of employees by routes is {1, 2, 3}, {4}, {5}. Therefore, there are 3 ways to chose drill captains: (1, 4, 5), (2, 4, 5), (3, 4, 5).</p>
<p><b>Example case 3.</b> Here the optimal distribution of employees by routes is {1, 2}, {3, 4}, {5, 6}. Therefore, there are 8 ways to chose drill captains:<br/> (1, 3, 5), (1, 3, 6), (1, 4, 5), (1, 4, 6), (2, 3, 5), (2, 3, 6), (2, 4, 5), (2, 4, 6).</br/></p>

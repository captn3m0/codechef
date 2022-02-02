---
{"category_name":"medium","problem_code":"COLLECT","problem_name":"Collecting Magical Berries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"tuananh93","date_added":"30-11-2012","tags":{"0":"combinatorics","1":"june13","2":"medium","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/COLLECT","time":{"view_start_date":1371462288,"submit_start_date":1371462288,"visible_start_date":1371460885,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>ChefLand is very famous for its magical forests. There you can find a lot of different trees, fruits, mushrooms and many other charming things. Recently, <b>N</b> bushes of magical berries (numbered <b>1</b> to <b>N</b>) have been discovered. The berries are in fact very tasty, and it has become very popular among the tourists to pick these berries (don't worry, as the berries are magical, they'll grow next night again :) ).</p>
<p>Groups of tourists often want to go for a walk to pick some berries. For the <b>i</b>-th group it is known that it consists of <b>K<sub>i</sub></b> people and they will collect all the berries, from <b>K<sub>i</sub></b> consecutive bushes, beginning from the <b>L<sub>i</sub></b>-th, going to the <b>L<sub>i+1</sub></b>-th, the <b>L<sub>i+2</sub></b>-th and so on. Generally, a plan of the <b>i</b>-th group of tourists can be described by the numbers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b> - the leftmost and the rightmost bush for the <b>i</b>-th group. When the group have picked some amount of berries, we consider that they've picked all the berries from the bushes from the <b>L<sub>i</sub></b>-th to the <b>R<sub>i</sub></b>-th, they want to divide them <i>fairly</i>. <i>Fair</i> division is a division in such a way, that the difference between the maximal and the minimal number of berries a single tourist from the group receives is less than two. All the berries (even from a single bush) are different. Generally, there are a lot of ways to divide them fairly. For example, you can divide fairly two berries between two tourists in two ways.</p>
<p>Some tourists are fond of dividing the berries. So, they will get upset if the number of ways to divide them is too small. But some tourists will get upset if the number of ways if too huge, they will find it quite confusing. So, the ChefLand tourist agency has offered the following service: for each group of tourists they tell the number of ways to divide the berries<br />
fairly among them after the walk. As they currently don't have enough employees, they've asked you to help them. Of course, the number of berries on bushes changes during a day. You'll receive this information. Also, you'll receive the information about the groups of tourists. For each group of tourists, please tell the number of ways to divide collected berries fairly. We understand that this number can be quite huge, so we ask you to calculate it modulo <b>3046201</b>.</p>
<h3>Input</h3>
<p>The first line of the input consists of a single integer <b>N</b> - the number of bushes.<br /><br />
The second line consists of <b>N</b> integers - the <b>i</b>-th integer corresponds to the amount of the berries on the <b>i</b>-th bush in the beginning.<br /><br />
The third line consists of a single integer <b>Q</b> - the number of requests given to your program. <br /><br />
Next <b>Q</b> lines are the lines of the following form: "change A B" - then the amount of the berries on the bush <b>A</b> becomes equal to <b>B</b>, or "query L R" - if a group of tourists wants to visit all the bushes from the <b>L</b>-th to the <b>R</b>-th, what is the number of ways to divide their collected berries fairly, modulo <b>3046201</b>.</p>
<h3>Output</h3>
<p>For each "query L R" request, output the number of ways, asked in the statement, modulo <b>3046201</b>. Output one number on a single line.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b>&lt;=<b>N</b>&lt;=<b>100000</b></li>
<li><b>1</b>&lt;=<b>Q</b>&lt;=<b>100000</b></li>
<li>You can assume that the number of berries on a single bush will not exceed <b>30</b></li>
</ul>
</p><p><br /></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
8
2 1 1 2 1 2 2 2 5
change 2 2
query 1 8
query 5 7
query 3 3
query 4 4

<b>Output:</b>
2065880
90
1
1

</pre>
---
{"category_name":"medium","problem_code":"GANGAAM","problem_name":"Interrogating Gangsters","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"satej ","problem_tester":null,"date_added":"17-01-2014","tags":{"0":"cook42","1":"easy","2":"greedy","3":"satej"},"editorial_url":"http://discuss.codechef.com/problems/GANGAAM","time":{"view_start_date":1390158900,"submit_start_date":1390158900,"visible_start_date":1390158900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/mandarin/GANGAAM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/russian/GANGAAM.pdf">Russian</a> as well.</h3>
<p>There is a party going on in a club situated in some city. <b>N</b> gangsters will attend that party. The <b>i</b>-th gangster comes to the party at the beginning of <b>S<sub>i</sub></b> time and will leave the party at the end of <b>E<sub>i</sub></b>. At any time unit, the set of gangsters who are present in the party enjoy drinking together and become friends. After the party, the law enforcement agency in the city is suspecting that there has been some conspiracy for sabotage in the city. So they feel that it is necessary to interrogate several gangsters. But they don't have time to interrogate all of them. They are suspecting that there are <b>X</b> gangsters involved in this conspiracy. It is natural that those <b>X</b> gangsters will be friends with each other.<br /><br />Now the enforcement agency have got the idea. They want to interrogate the gangsters in such a way that for each subset of <b>X</b> friend gangsters (where each pair of gangsters in that subset are friends), there will be at least one interrogated gangster from that subset. But to save their time, they want to interrogate minimum number of gangsters. Given the information of the gangsters and number <b>X</b>, help them to find the minimum number of gangsters to be interrogated.<br /><br /><b>Note</b>: Two gangsters are friends if they have common time in the club. For example, the gangster entering at time 1 and leaving at time 3 can be a friend with another gangster entering at time 3 and leaving some time afterwards. But a gangster leaving at time 3 cannot be a friend with another gangster entering at time 4.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
Each test case starts with a line containing <b>N</b> and <b>X</b>. Each of the next <b>N</b> lines contains, the arrival <b>S<sub>i</sub></b> and the departure <b>E<sub>i</sub></b> of a gangster. </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimum number of gangsters that the city law enforcement agency should interrogate. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>X</b> ≤ <b>N</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>S<sub>i</sub></b> ≤ <b>E<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 2
1 3
3 5
4 6
4 3
1 8
2 9
3 10
4 11
4 3
1 5
4 9
8 13
12 17


<b>Output:</b>
1
2
0
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Gangsters 1 and 2 are friends each other. Also Gangsters 2 and 3 are friends with each other. So it is enough to interrogate gangster 2 only.</p>
<p><b>Example case 2.</b>All of the four gangsters are friends with each other. The police suspects that the size of the group is 3. So it is enough to interrogate any two of the gangsters.</p>
<p><b>Example case 3.</b>There is not any group of 3 gangsters, where each of them are friends with each other. So the police don't need to interrogate anybody. </p>

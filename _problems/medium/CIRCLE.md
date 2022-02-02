---
{"category_name":"medium","problem_code":"CIRCLE","problem_name":"Minion Circle","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"piyushkumar","problem_tester":"balajiganapath","date_added":"20-04-2014","tags":{"0":"dynamic","1":"easy","2":"ltime11","3":"piyushkumar","4":"prefix"},"editorial_url":"http://discuss.codechef.com/problems/CIRCLE","time":{"view_start_date":1398587400,"submit_start_date":1398587400,"visible_start_date":1398587400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/mandarin/CIRCLE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/russian/CIRCLE.pdf">Russian</a>.</h3>
<p>El Macho's army of mutated minions is marching towards Gru, the army is standing in a rectangular formation measuring <b>NxM</b>. The spray of antidotes done by Gru has turned some of the minions back to normal, but now they are trapped within the army of mutated ones. Formally, a normal minion is <i>"not trapped"</i> if :<br /><br />
1) either he is on one of the edges of the rectangle<br /><br />
2) or one of his direct neighbors (directly in front/back of him, or left/right of him) is <i>not trapped</i>.<br /><br />
<br /><br />
Any trapped minion will be killed by the mutated minions, which Gru cannot let happen. Gru will use his antidote ray to turn exactly one row and one column of the army to normal minions. If there are any normal minions in that row or column, they remain unaffected. Can Gru select a row and a column such that no normal minion remains trapped after the antidote ray?<br /><br />
<br /><br />
<b>INPUT:</b><br /><br />
First line contains <b>T</b>, number of testcases<br /><br />
Each testcase starts with a line containing two space separated integers <b>N</b> and <b>M</b>.<br /><br />
N lines follow, each containing M characters. jth character of the ith line is <b>"B"</b> if the minion at ith row and jth column in the army is mutated, <b>"W"</b> otherwise.<br /><br />
<br /><br />
<b>OUTPUT:</b><br /><br />
Print "YES or "NO" (quotes for clarity) to indicate wheather it is possible for Gru to save the trapped minions.<br /><br />
<br /><br />
<b>CONSTRAINTS:</b><br /><br />
1&lt;=T&lt;=10<br /><br />
30 points : 1&lt;=N,M&lt;=100<br /><br />
70 points : 1&lt;=N,M&lt;=1000<br /><br />
<br /><br />
<b>SAMPLE INPUT:</b><br /><br />
1<br /><br />
3 3<br /><br />
BBB<br /><br />
BWB<br /><br />
BBB<br /><br />
<br /><br />
<b>SAMPLE OUTPUT:</b><br /><br />
YES<br /><br />
<br /><br />
<b>EXPLAINATION:</b><br /><br />
Any row and column pair selected by Gru guarantees that the trapped minion does not remain trapped.<br /></p>

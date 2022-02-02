---
{"category_name":"easy","problem_code":"SHIRO","problem_name":"Save The Princess","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"white_king","date_added":"27-03-2013","tags":{"0":"aug13","1":"dynamic","2":"easy","3":"simple","4":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/SHIRO","time":{"view_start_date":1376299800,"submit_start_date":1376299800,"visible_start_date":1376299800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Shiro is leading an army to save the princess of his kingdom "Abra". The princess has been made a prisoner by the neighboring kingdom "Kadabra". Kadabra is a magical land and is full of challenges. Shiro's army has to pass <b>N</b> levels before they can get to the princess. After each level, the army gets a few flags to carry along. The flags can either all be of kindom Abra OR all of kingdom Kadabra. The magic of Kadabra forces Shiro's army to carry the flags irrespective of which kingdom they belong to. The princess doesn't know Shiro or anyone from his army. She will not escape with them unless she can trust them. She will trust them only if the number of Abra's flags they are carrying is atleast as much as the number of Kadabra's flags.</p>
<p>The army gets <b>a<sub>i</sub></b> flags at the end of the i<sup>th</sup> level. Probability that flags received at the end of the i<sup>th</sup> level will be Abra's flags is <b>p<sub>i</sub></b>. Your task is to tell Shiro what is the probability that the princess will trust him once they reach her.</p>
<h3>Input:</h3>
<p>First line of input contains a single integer <b>T</b>, the number of test cases.<br/><br />
Each test starts with a single line having an integer, <b>N</b>, the number of levels in Kadabra.<br/><br />
Next line contains contains <b>N</b> integers with the i<sup>th</sup> integer being <b>a<sub>i</sub></b> as described above.<br/><br />
Next line contains contains <b>N</b> integers with the i<sup>th</sup> integer being <b>p<sub>i</sub></b> as described above. Note that the probabilities given will be in percents.<br/></br/></br/></br/></br/></p>
<h3>Output:</h3>
<p>For each test case, output a line containing the required probability. The answer will be accepted if the relative error is not more than 10<sup>-6</sup>.<br/></br/></p>
<h3>Constraints:</h3>
<pre>
1 ≤ <b>T</b> ≤ 100
1 ≤ <b>N</b> ≤ 100
1 ≤ <b>a<sub>i</sub></b> ≤ 100
0 ≤ <b>p<sub>i</sub></b> ≤ 100

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>
2
5
1 2 3 4 4
0 100 100 0 50
2
5 5
50 60

</pre><p><b>Output:</b></p>
<pre>
0.5000000
0.8000000


</pre><p>
<b>Update:</b></p>
<p>Difference in answer upto 1e-6 will be ignored.</p>

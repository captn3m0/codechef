---
{"category_name":"easy","problem_code":"NUMPATH","problem_name":"Number of Paths","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"TEXT","9":"PAS fpc","10":"NODEJS","11":"RUBY","12":"PHP","13":"GO","14":"HASK","15":"TCL","16":"PERL","17":"SCALA","18":"LUA","19":"BASH","20":"JS","21":"LISP sbcl","22":"PAS gpc","23":"BF","24":"CLOJ","25":"D","26":"CAML","27":"FORT","28":"ASM","29":"FS","30":"WSPC","31":"LISP clisp","32":"SCM guile","33":"PERL6","34":"ERL","35":"CLPS","36":"ICK","37":"NICE","38":"PRLG","39":"ICON","40":"PIKE","41":"SCM qobi","42":"ST","43":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"vineet_adm","problem_tester":null,"date_added":"28-10-2013","tags":{"0":"cook40","1":"dynamic","2":"fenwick","3":"medium","4":"vineet_adm"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/NUMPATH","time":{"view_start_date":1384713000,"submit_start_date":1384713000,"visible_start_date":1384713000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NUMPATH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<h3> Read problems statements in Russian <a target="_blank" href="https://www.codechef.com/download/translated/COOK40/russian/NUMPATH.pdf">here</a></h3>
<p>The Head Chef is interested in studying interactions between his chefs . There are <b> N </b> chefs with ids 1 to N . Each chef trusts some of the other chefs . The relation of trust is one way . Also , a chef may trust chefs only with ids strictly greater than his/her id .A chef with id = i , trusts the chefs with next n<sub>i</sub> id's.  <br /></p>
<p>The Head Chef wants to know given a chef B and a set of chefs S,  how many lines of trust exist between each element of S and B . A line of trust between chefs A and B is a sequence of chefs a<sub>1</sub> ... a<sub>k</sub> starting at A ( a<sub>1</sub> = A )and finishing at B  (A<sub>k</sub> = B) such that A<sub>i</sub> trusts A<sub>(i+1) </sub> for all i ( 1 to k-1) . Two lines of trust are different if they have a different chef at the some position in the line . </p>
<p><br /><br />
Since the answer may be quite large , output it modulo 1000000007 .</p>
<h3>Input</h3>
<ul>
<li>The first line contains a two space seperated integers <b>N</b> and <b> B</b> denoting the number of chefs and the target chef for whom the lines of trust have to be calculated.  </li>
<li>The next <b> N</b> lines contains an integer <b> n<sub>i</sub></b> denoting the number of chefs which are trusted by the chef with id = i .  </li>
<li> The next line contains a single integer <b> Q </b> denoting the number of queries </li>
<li> The next <b> Q </b> lines contain elements of set <b>S</b> .
</li></ul>
<h3>Output</h3>
<ul>
<li>Output a single line for each query containing the answer to the query.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>200000</b></li>
<li><b>1</b> ≤ <b>B</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>Each element of set S </b> &lt; <b>B</b></li>
<li><b>1</b> ≤ <b>i + n<sub>i</sub> ( for i = 1 to N ) </b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>n<sub>i</sub> ( for i = 1 to N ) </b> ≤ <b>N - 1</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3 3
2
1
0
2
1
2
<b>Output:</b>
2
1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The lines of trust between 1 and 3 are <br /><br />
1 , 3 <br /><br />
1 , 2 ,3 <br /><br />
There is one line of trust between 2 and 3 which is <br /><br />
2 3 <br /></p>

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
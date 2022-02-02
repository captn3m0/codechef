---
{"category_name":"hard","problem_code":"MARTARTS","problem_name":"Martial Arts","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"thocevar","problem_tester":"laycurse","date_added":"21-09-2012","tags":{"0":"bipartite","1":"hard","2":"matching","3":"nov12","4":"thocevar"},"editorial_url":"http://discuss.codechef.com/problems/MARTARTS","time":{"view_start_date":1352712600,"submit_start_date":1352712600,"visible_start_date":1352712600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef somehow strayed away from kitchen and got involved in martial arts. He isn't in the right shape to get into fights but he is qualified enough to be a coach in the local gym. He's just been put in charge of organizing an upcoming tournament.</p>
<p>There will be two teams of N fighters participating in the tournament. We will refer to the Chef's team as home team. The other one will be guest team. As the organizer, Chef has to assign all fighters to N fights. One contestant from each team will take part in a fight and the judges will award certain number of points to each fighter's team according to their performance. Team's final score is equivalent to the sum of points which the contestants earned in their fights. Chef has to assign every fighter to exactly one fight.</p>
<p>Chef knows all participants very well and wants to assign pairs in such way that will maximize the difference between home and guest team's score. Let's say that home team will score H and guest team G points. Chef wants to maximize H-G. If he can do that in multiple ways, he would then like to maximize H.</p>
<p>However, he is not the only one with a hidden agenda. After the pairs are announced, guest coach can make up an excuse that one of his contestants got injured. This means that this contestant's fight won't take place and therefore won't contribute to team scores. When deciding whether to cancel some fight and which fight should that be, the guest coach has a similar goal as Chef. His primary goal is to maximize G-H and secondary to maximize G.</p>
<p>Chef is stunned by guest coach's tactic and asks for your help to organize fights optimally.</p>
<h3>Input</h3>
<p>The first line contains the number of contestants N in each team. The following N lines describe all possible pairings of contestants. j-th element in i-th line is of the form "A<sub>i,j</sub>:B<sub>i,j</sub>" which means that home team would get A<sub>i,j</sub> points and guest team B<sub>i,j</sub> points if i-th contestant from home team fights against the j-th from guest team.</p>
<h3>Output</h3>
<p>Output the number of points H scored by home team and the number of points G scored by guest team in an optimally conducted tournament. Separate them by a single space.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ N ≤ 100</li>
<li>0 ≤ A<sub>i,j</sub>, B<sub>i,j</sub> &lt; 10<sup>12</sup></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
10:7 0:20 6:5
5:5 0:10 8:10
0:0 50:0 100:0

<b>Output:</b>
18 17
</pre><h3>Explanation</h3>
<p>Chef will pair contestants in the following way: (1,1), (2,3), (3,2). Coach of the guest team will cancel the last fight (3,2) which would earn home team 50 points. This way the final score is 18 points for home team and 17 points for guest team.</p>

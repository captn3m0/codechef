---
{"category_name":"easy","problem_code":"HOMDEL","problem_name":"Delivery Boy","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"laycurse","date_added":"1-07-2012","tags":{"0":"aug12","1":"shortest","2":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/HOMDEL","time":{"view_start_date":1344677312,"submit_start_date":1344677312,"visible_start_date":1344677400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has started Home Delivery scheme in one of his restaurants. As the scheme is new , Chef appoints only one employee to deliver food to various locations. The delivery boy who has been appointed is an absent-minded chap. He always forgets to fill fuel in his delivery scooter. So what he does is that whenever Chef sends him for delivery, he goes to the gas station from the restaurant first. He gets his tank filled and then he heads towards his destination. He will do this every single time <i>irrespective of the destination</i>. The delivery boy tries his best to be on time. And to do this, he will choose those paths(from restaurant to gas station AND gas station to destinaion) which cost him the <i>least</i> amount of time. Your task is to tell the Chef how much time can the delivery boy save if he had enough fuel in his scooter i.e. if he went to the destination directly without stopping for fuel (taking the path which costs him least amount of time).</p>

<p>The city has <b>N</b> streets numbered from <b>0</b> to <b>N-1</b>. The restaurant is on street number <b>S</b>, the gas station is on street number <b>G</b> and the food has to be delivered to street <b>D</b> . Note that <b>S, G</b> and <b>D</b>  need <b>not</b> be distinct.</p>

<h3>Input:</h3>
First line of the input contains a single integer <b>N</b>.<br />
Then follows an <b>NxN</b> matrix <b>T</b> which is represented in <b>N</b> lines with <b>N</b> space separated integers on each line.<br />
<b>T[i][j]</b> denotes the time taken to move from the i<sup>th</sup> street to j<sup>th</sup> street. Obviously, <b>T[i][i]</b> = 0. <br />
Next line contains a single integer <b>M</b>, the number of scenarios.<br />
The following <b>M</b> lines contain 3 space separated integers <b>S</b>, <b>G</b> and <b>D</b>.<br />

<h3>Output:</h3>
<p>For each of the <b>M</b> scenarios, output the time taken by the delivery boy to deliver the food and the time he could have saved if he went directly from <b>S</b> to <b>D</b>.<br />
Both these values must be on the same line separated by a single space.</p>
<h3>Constraints:</h3>
<pre>

1 ≤ <b>N</b> ≤ 250
1 ≤ <b>M</b> ≤ 10000
0 ≤ <b>T[i][j]</b> ≤ 100000
0 ≤ <b>S</b>,<b>G</b>,<b>D</b> ≤ <b>N</b>-1

</pre>
<h3>Example:</h3>
<b>Input:</b>
<pre>
4
0 2 1 3
1 0 4 5
3 1 0 3
1 1 1 0
4
0 2 1
0 2 2
3 1 2
3 0 1

</pre>
<b>Output:</b>
<pre>
2 0
1 0
3 2
3 2

</pre>
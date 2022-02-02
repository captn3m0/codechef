---
{"category_name":"easy","problem_code":"SETELE","problem_name":"Sebi and the corrupt goverment","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"TCL","42":"TEXT"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"iscsi ","problem_tester":"kevinsogo","date_added":"15-11-2016","tags":{"0":"cook76","1":"easy","2":"iscsi","3":"union"},"editorial_url":"http://discuss.codechef.com/problems/SETELE","time":{"view_start_date":1479666600,"submit_start_date":1479666600,"visible_start_date":1479666600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/mandarin/SETELE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/russian/SETELE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/vietnamese/SETELE.pdf">Vietnamese</a> as well.</h3>

<p>Sebi lives in Chefland where the government is extremely corrupt that usually makes fool out of public by announcing eye catching but non-sustainable schemes. Recently there was a move to increase tourism in the country that was highly lauded. Sebi wants to examine whether the move has some potential or is a hogwash as usual.</p>

<p>The Chefland is a city with very old road infrastructure. The city has <b>N</b> tourist places. All the places are reachable from each other. The corrupt administrators of the city constructed as few roads as possible just ensuring that all the places are reachable from each other, and those too have now gone old with potholes every here and there. Upon this, there is a toll tax for each road too, which you have to pay once for using that road. Once you pay the tax for a road, you can visit it again as many times as possible.</p>

<p>The tourists coming to Chefland usually want to see all the <b>N</b> nice places. They usually have visit in their own vehicle and stay for few days. Also, they are usually not very rich, they want to pay as less toll tax as possible. For promoting tourism, the government offered their citizens a scheme. It was announced that citizens can choose any two places and the government will build a high class road between those two places and that too without any toll tax. Note that citizens may choose to have a high class road between two cities which already have an old road between them.</p>

<p>Sebi is very sceptical of the claims of the announcement. So, he wants to understand the expected toll tax a tourist has to pay to tour the entire city considering that the citizens of Chefland vote for the two cities for constructing high road uniformly randomly. Can you please him in finding this?</p>

<h3>Input</h3>
<p>There is a single test case per test file.</p>
<p>The first line of the input contains an integer <b>N</b> denoting the number of tourist spots in Chefland.</p>
<p>Each of the he next <b>N - 1</b> lines contains three space separated integers <b>u, v, c</b>, denoting that there is a road between tourist spot <b>u</b> and <b>v</b> which has a toll tax of <b>c</b> Rs.</p>

<h3>Output</h3>
<p>Output a single line containing the expected toll tax a tourist has to pay for visiting all the <b>N</b> spots after the construction of new road. Your answer will be considered correct if it has an absolute error less than or equal to <b>1e-2</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>u, v</b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>c</b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
1 2 3
1 3 2

<b>Output:</b>
2.333333
</pre>

<h3>Explanation</h3>
<p>Assume that the citizens construct the high class road between city 1 and 2. A tourist can visit all the places by just paying a toll tax of 2 Rs.</p>
<p>If the high class road is constructed between city 1 and 3. All the places then can be visited by just paying a toll tax of 3 Rs.</p>
<p>If the cities 2 and 3 are connected by the high class road. All the places can be visited by paying a toll tax of 2Rs. </p>
<p>Hence expected Rs. that a tourist has to pay in toll tax will be (2 + 3 + 2) / 3 = 7 / 3 = 2.333333</p>
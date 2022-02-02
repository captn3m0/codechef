---
{"category_name":"hard","problem_code":"SCIENCEF","problem_name":"Science Fair","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP clisp","37":"SCM guile","38":"JS","39":"ERL","40":"TCL","41":"kotlin","42":"PERL6","43":"TEXT","44":"SCM chicken","45":"CLOJ","46":"COB","47":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"usaxena95","problem_tester":null,"date_added":"5-12-2017","tags":{"0":"acm17kgp","1":"bitmask","2":"dynamic","3":"hard","4":"kgp17rol","5":"tsp","6":"usaxena95"},"editorial_url":"https://discuss.codechef.com/problems/SCIENCEF","time":{"view_start_date":1515875400,"submit_start_date":1515875400,"visible_start_date":1515875400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>This is a story of city Chef Land. The transport network of the city contains <b>V</b> intersections and <b>E</b> bidirectional roads. The intersections are numbered from 1 to <b>V</b>. Every intersection can be reached from every other intersection. The road <b>E<sub>i</sub></b> has length <b>W<sub>i</sub></b>. The Mayor is organizing a <b>Science Festival</b> at intersection <b>F</b>.</p>
<p>The <b>N</b> students studying in School of Chef Land have requested their principal to send them to the Festival. Each student lives at an intersection (student <b>i</b> lives at intersection <b>P<sub>i</sub></b>). The school is present at intersection <b>S</b>.</p>
<p>The principle wants to send randomly some of the <b>N</b> students to the Science Festival. He writes their names on an Official List and gives it to the bus driver to arrange the transport. The probability that name of <b>i<sup>th</sup></b> student is written on the list is equal to the percentage marks <b>M<sub>i</sub></b> he receives in Science.</p>
<p>The driver's job is to drive the school bus from school <b>S</b> to Festival <b>F</b> picking up all the students mentioned on the official list. Since all the students are super excited to visit the festival, therefore if the bus goes through the intersection they are living on, they will on board the bus even if their name was not written on the official list by the principal.</p>
<p>We know that the bus driver doesn’t like talkative people in the bus. Also, for every student <b>i</b> we know his talkativeness value <b>T<sub>i</sub></b>. The talkativeness of the trip done by driver from <b>S</b> to <b>F</b> is defined as the <b>product</b> of Talkativeness of all the students that got into the bus.</p>
<p>For a trip: The driver faces a <b>cost(Trip)</b> = <b>Length(Trip)</b> + <b>(Talkativeness(Trip) modulo 10<sup>9</sup>+7 )</b>. Therefore the driver always chooses the path with minimum cost. He also charges this amount from the principal.</p>
<p>If the driver receives an <b>empty list</b> he cancels the trip and the cost is <b>0.</b></p>
<p>The principal wants to know the expected value of money paid by him to the driver for a single trip.</p>

<h3>Input</h3>
<ul>
<li>The first line contains 4 space separated integers <b>V, E, S, F</b>.</li>

<li>The second line contains a single integer <b>N</b>.</li>

<li><b>i<sup>th</sup></b> line of the next <b>N</b> lines contains 3 integers each <b>P<sub>i</sub></b> <b>T<sub>i  </sub>M<sub>i</sub></b>.</li>

<li>The next <b>E</b> lines contains 3 integers each <b>u v w</b> denoting a road of length <b>w</b> between intersections <b>u</b> and <b>v</b>.</li>
</ul>

<h3>Output</h3>
<p>Print a single integer <b>(A*B<sup>-</sup><sup>1</sup>) mod</b> <b>10<sup>9</sup>+7</b> where <b>A/B</b> is the expected money paid by the principal and gcd(A, B) = 1. <b>B<sup>-</sup><sup>1</sup></b> is the modular inverse of <b>B</b> modulo <b>10<sup>9</sup>+7</b></p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>V</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>E</b> ≤ <b>3000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>16</b></li>
<li><b>1</b> ≤ <b>S, F, </b><b>P<sub>i</sub></b> ≤ <b>V</b></li>
<li><b>S, F, P<sub>i</sub></b>'s are all distinct</li>
<li><b>0</b> ≤ <b>M<sub>i</sub></b> ≤ <b>100</b></li>
<li><b>0</b> ≤ <b>T<sub>i</sub></b> ≤ <b>10<sup>9</sup>+6</b></li>
<li><b>1</b> ≤ <b>w</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>u, v</b> ≤ <b>V</b></li>
<li>There is at most 1 road between any pair of intersection</li>
<li>Every intersection can be reached from every other intersection.</li>
<li><b>u ≠ v</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5 5 1 5
3
2 1 50
3 1 50
4 1 50
1 2 1
1 3 1
1 4 1
2 5 1
3 5 1

<b>Output:</b>
125000005
</pre>
<h3>Explanation</h3>
<table style="height: 128px; width: 492px;">
<tbody>
<tr>
<td style="width: 400.133px;"><b>Official List</b></td>
<td style="width: 182.867px;"><b>Probability</b></td>
<td style="width: 126px;"><b>Path travelled</b></td>
<td style="width: 96px;"><b>Length</b></td>
<td style="width: 96px;"><b>Students</b><br /><b>in trip</b></td>
<td style="width: 96px;"><b>Talk</b><br /><b>Value</b></td>
<td style="width: 159px;"><b>Cost</b></td>
</tr>
<tr>
<td style="width: 400.133px;">{}</td>
<td style="width: 182.867px;">1/8</td>
<td style="width: 126px;">None</td>
<td style="width: 96px;">0</td>
<td style="width: 96px;">None</td>
<td style="width: 96px;">0</td>
<td style="width: 159px;">0</td>
</tr>
<tr>
<td style="width: 400.133px;">{2}</td>
<td style="width: 182.867px;">1/8</td>
<td style="width: 126px;">1-2-5</td>
<td style="width: 96px;">2</td>
<td style="width: 96px;">{2}</td>
<td style="width: 96px;">1</td>
<td style="width: 159px;">3</td>
</tr>
<tr>
<td style="width: 400.133px;">{3}</td>
<td style="width: 182.867px;">1/8</td>
<td style="width: 126px;">1-3-5</td>
<td style="width: 96px;">2</td>
<td style="width: 96px;">{3}</td>
<td style="width: 96px;">1</td>
<td style="width: 159px;">3</td>
</tr>
<tr>
<td style="width: 400.133px;">{4}</td>
<td style="width: 182.867px;">1/8</td>
<td style="width: 126px;">1-4-1-3-5</td>
<td style="width: 96px;">4</td>
<td style="width: 96px;">{3, 4}</td>
<td style="width: 96px;">1*1</td>
<td style="width: 159px;">5</td>
</tr>
<tr>
<td style="width: 400.133px;">{2, 3}</td>
<td style="width: 182.867px;">1/8</td>
<td style="width: 126px;">1-2-1-3-5</td>
<td style="width: 96px;">4</td>
<td style="width: 96px;">{2, 3}</td>
<td style="width: 96px;">1*1</td>
<td style="width: 159px;">5</td>
</tr>
<tr>
<td style="width: 400.133px;">{2, 4}</td>
<td style="width: 182.867px;">1/8</td>
<td style="width: 126px;">1-4-1-2-5</td>
<td style="width: 96px;">4</td>
<td style="width: 96px;">{2, 4}</td>
<td style="width: 96px;">1*1</td>
<td style="width: 159px;">5</td>
</tr>
<tr>
<td style="width: 400.133px;">{3, 4}</td>
<td style="width: 182.867px;">1/8</td>
<td style="width: 126px;">1-4-1-3-5</td>
<td style="width: 96px;">4</td>
<td style="width: 96px;">{3, 4}</td>
<td style="width: 96px;">1*1</td>
<td style="width: 159px;">5</td>
</tr>
<tr>
<td style="width: 400.133px;">{2, 3, 4}</td>
<td style="width: 182.867px;">1/8</td>
<td style="width: 126px;">1-4-1-2-1-3-5</td>
<td style="width: 96px;">6</td>
<td style="width: 96px;">{2, 3, 4}</td>
<td style="width: 96px;">1*1*1</td>
<td style="width: 159px;">7</td>
</tr>
</tbody>
</table>
<p>Expected cost =(0+3+3+5+5+5+5+7)/8 = 33/8 = 33 * 8<sup>-</sup><sup>1</sup> <b>mod</b> <b>10<sup>9</sup>+7</b>= 33*125000001 <b> mod</b> <b>10<sup>9</sup>+7 = </b>125000005</p>
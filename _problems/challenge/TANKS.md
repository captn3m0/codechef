---
{"category_name":"challenge","problem_code":"TANKS","problem_name":"Tanks","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"iscsi ","problem_tester":"xcwgf666","date_added":"19-11-2015","tags":{"0":"iscsi"},"editorial_url":"http://discuss.codechef.com/problems/TANKS","time":{"view_start_date":1450085400,"submit_start_date":1450085400,"visible_start_date":1450085400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/mandarin/TANKS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/russian/TANKS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/vietnamese/TANKS.pdf">Vietnamese</a> as well.</h3>

<p>
Chefland is under attack. The enemy forces are using powerful tanks to break Chefland's defense. The government wants to destroy the enemy tanks, but is unsure of their numbers. It has, therefore, requested the math whizs amongst the public (that's you guys!) to come out and help estimate how many tanks the enemy has. The government simulates the current situation to decide who has the best solution.</p>

<p>The government spies have gathered the following information about tanks and their production line:
<ul>
<li>There are <b>K</b> different types of tanks.</li>
<li>One production line can make only one type of tank.</li>
<li>Two different production lines cannot make the same type of tank.</li>
<li>When installing a production line, the enemy mathematicians have to setup the <b>serial_id generator</b>, which cannot be modified later.</li>
<li>Difference between the <b>serial_id</b>'s of any two tanks of the same type cannot exceed <b>M</b>.
</ul>
</p>
<p> The inventor of the <b>serial_id generator</b> wanted to make the serial numbers extremely difficult to guess, and so he built a tricky machine.</p>
<p>The machine is set up using the following three initial parameters.
<ul>
<li>start_id is a non-negative integer</li>
<li>direction can be either <b>increment</b> or <b>decrement</b></li>
<li>sequence_type can be normal, prime, Ulam(1,2), or Ulam(2,3)</li>
</ul>
</p>
<p>More details about the <b>serial_id generator</b> are provided later.
</p>

<p>
We can ask the Chefland government to capture a tank, and then provide us with the captured tank <b>type</b> and <b>serial_id</b>. The capture query can be: 
<ul>
<li>Capture a tank of type <b>i</b> (1 ≤ i ≤ K). This costs <b>C<sub>i</sub></b>.</li>
<li>Special capture: capture a tank of any type. This operation has a cost <b>C</b>.</li>
</ul>
</p>
 
<p>Every tank type has different armour, and therefore we need different kinds of bomb for each of them, which also have different prices (<b>B<sub>i</sub></b> for the bomb piercing the armor of the <b>i</b><sup>th</sup> tank type).
After we finish the above scouting process, we need to provide the number (<b>D<sub>i</sub></b>) of bombs we need (for each type).
Each bomb can destroy one tank (but the bomb completely annihilates the tank to little bits of scrap metal, so we can't extract any information from a destroyed tank.)
If the enemy has <b>R<sub>i</sub></b> tanks remaining after the captures, and we ask for <b>D<sub>i</sub></b> bombs but <b>R<sub>i<sub></b> > <b>D<sub>i</sub></b>, than we have to pay <b>P<sub>i</sub></b> penalty for each remaining tank (after <b>D<sub>i</sub></b> of them have been destroyed).
</p>

<p> The goal is to minimize the <tt>capture_cost + destroy_cost + penalty_cost</tt>:
<ul>
<li><tt>capture_cost</tt>: ∑ cost of capture operations</li>
<li><tt>destroy_cost</tt>: ∑ <b>D<sub>i</sub></b> * <b>B<sub>i</sub></b> (some over all tank types)</li>
<li><tt>penalty_cost</tt>: ∑ max((<b>R<sub>i<sub></b> - <b>D<sub>i</sub></b>) , 0) * <b>P<sub>i</sub></b> (sum over all tank types)
</ul>
</p>

<p>More detail about <b>serial_id generator</b>:
<ul>
<li><b>normal</b> sequence: 0, 1, 2, 3, … is the sequence of non-negative integers.</li>
<li><b>prime</b> sequence: the i<sup>th</sup> element is the (i<sup>th</sup> prime number + 1) / 2 <em>(integer division)</em>. So, the sequence is: 1, 2, 3, 4, 6 ….</li>
<li><b>Ulam(1,2)</b> sequence: 1, 2, 3, 5, …. You can read more about this sequence <a href="https://en.wikipedia.org/wiki/Ulam_number"> here.</a> </li>
<li><b>Ulam(2,3)</b> sequence: 2, 3, 5, 7, ….</li>
</ul>
So the serial_id of the i<sup>th</sup> tank will be start_id ± the i<sup>th</sup> number in the sequence. (plus if the direction of the serial id generator was setup with the direction parameter as <b>increment</b>, minus otherwise).</p>
<p>e.g. SerialGenerator(start_id = 12345, increasing, Ulam(1,2)) will produce the following <b>serial_id</b>'s: 12346, 12347, 12348, 12350, 12352 ….
</p>
<p>
<b>Note.</b> This might help: <a href="https://en.wikipedia.org/wiki/German_tank_problem">German tank problem.</a>
</p>

<h3>Input</h3>
<p>The first line of input contains the integer <b>M</b>.</p>
<p>The second line of the input contains an integer <b>U12</b>, denoting the number of elements of the Ulam(1,2) sequence provided to you. The next <b>U12</b> lines contain an integer each: such that the i<sup>th</sup> line gives the i<sup>th</sup> element of the Ulam(1,2) sequence. Each of these numbers is at most <b> M + 1</b>.</p>
<p>The following line contains an integer <b>U23</b> denoting the number of Ulam(2,3) sequence provided to you. The next U23 lines contain an integer each. Each of these numbers is at most <b> M + 2</b>.</p>
<p>The following line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space-separeated integers: <b>K</b> and <b>C</b>. This is followed by a line containing <b>K</b> space-separated integers: <b>C<sub>1</sub></b>, <b>C<sub>2</sub></b>, …, <b>C<sub>K</sub></b>.
Similarly, the next two lines for the test case contain <b>K</b> space-separated integers each: the first line specifying the sequence <b>B<sub>i</sub></b>, and the second <b>P<sub>i</sub></b>.

<h3>Output</h3>
<p>For each test case, the output should be as follows.</p>
<p>
If you want to capture a tank, then just output a line with a non-negative integer denoting the type of the tank you want captured, or 0 if you do not care about the type of the tank being captured.
</p>
<p>
You can keep on repeating the above request until desired. If you think you have enough information, then output -1 in a new line. This ends the scouting process. Of course, if you do not want to capture any tanks at all, then you can output this in the first line itself.
</p>
<p>
After scouting is finished, print a single line with <b>K</b> space-separated non-negative integers denoting the sequence <b>D<sub>i</sub></b>. In case any <b>D<sub>i</sub></b> is negative, or exceeds <b>M</b>, then you will get a wrong answer verdict.
</p>

<h3>Interactivity details</h3>
<p>This is an <b>interactive</b> challenge problem, so after you output the description of your capture request, flush the output buffer. In C++, you can do this with <b>fflush(stdout);</b> routine.</p>
<p>After you do it, you'll receive the capture tank <b>type</b>, and its <b>serial_id</b>. If there are no tanks of this type left, then you will get <b>type -1</b> answer. (Also applies if the requested type is zero, and no more tanks are available to be captured.)</p>

<h3>Constraints</h3>
The test cases for the problem are divided into <b>4</b> groups, each containing <b>5</b> test cases.
<ul>
<li>Group 1: M = 10<sup>3</sup></li>
<li>Group 2: M = 10<sup>4</sup></li>
<li>Group 3: M = 10<sup>5</sup></li>
<li>Group 4: M = 10<sup>6</sup></li>
</ul>
Moreover, in all the test cases:
<ul>
<li><b>T = 20</b></li>
<li><b>0 &lt; U12 , U23 &lt; 100000</b></li>
<li><b>3 ≤ K  ≤ 20</b></li>
<li><b>100 ≤ C  ≤ 200</b></li>
<li><b>C &lt; C<sub>i</sub> ≤ 3*C</b></li>
<li><b>10 ≤ B<sub>i</sub> ≤ C</b></li>
<li><b>C<sub>i</sub> &lt; P<sub>i</sub> ≤ 1000</b></li>
<li><b>0 ≤ serial_id ≤ 10<sup>9</b></li>
</ul>
<p> </p>

<h3>Test Case Generation</h3>
<p>
The numbers of tanks, <b>K</b>, is chosen from the interval <b>(3, 20)</b>.
After that, for every type of tank, the following constants are generated uniformly and independently of the other tank types.
<ul>
<li><b>C</b> from <b>(100, 200)</b></li>
<li><b>C<sub>i</sub></b> from <b>(C+1, 3*C)</b></li>
<li>10% of the test cases <b>B<sub>i</sub></b> from <b>(10, C)</b>, 90% of the test cases <b>B<sub>i</sub></b> from <b>(C/4, C)</b></li>
<li><b>P<sub>i</sub></b> from <b>(C<sub>i</sub>+1, 1000)</b></li>
<li>sequence_type</li>
<li>direction from <b>{increment, decrement}</b></li>
</ul>
<p>We choose start_id uniformly from (0, 10<sup>9</sup>), and the number of tanks is chosen uniformly from the valid range.
If one of the tanks' serial_id is not in the valid range (0, 10<sup>9</sup>), then repeat this.</p>
<p>
Capture requests work in the following way:
<ul>
<li>All capture requests are independent of each other.</li>
<li>If a particular tank type is requested, a tank is chosen randomly from the set of tanks of this type by uniform sampling.</li>
<li>For special capture requests (when no tank type is given), first a probability distribution is constructed in which all the tank types which have at least one tank remaining have a probability inversely proportional to their usual capture cost, while types having no tanks remaining are ignored. Formally, p(class=<b>i</b> | <b>i</b> has at least one tank) ∝ 1/<b>C<sub>i</sub></b>), and p(class=<b>i</b> | <b>i</b> has no tank remaining) = 0. A tank type is selected by sampling this distribution, and then a tank of this type is chosen ramdonly and uniformly.</li>
</ul>
</p>

<h3>Scoring</h3>
<p> 
The score calculated on a test case is:<br/>( <tt>capture_cost</tt> + <tt>destroy_cost</tt> + <tt>penalty_cost</tt> ) / ( ∑(number of tanks of i<sup>th</sup> type) * B<sub>i</sub> ).
</p>
<p>The score in one test file is the sum of the scores over all test cases. The total score of your solution is the sum of the scores for all the test files. During the contest, scores only for one test case per group (so, in total, at 4 test cases) are reported.</p>

<h3>Example</h3>
<pre><b>Input:</b>
<b>Initial input: </b>
<tt>
5          <--- <b>M</b>
5          <--- <b>U12</b>
1
2
3
4
6
4          <--- <b>U23</b>
2
3
5
7
1          <--- <b>T</b>
2 111      <--- <b>K C</b>
112 333    <--- <b>C<sub>1</sub> C<sub>2</sub></b>
10 111     <--- <b>B<sub>1</sub> B<sub>2</sub></b>
113 1000   <--- <b>P<sub>1</sub> P<sub>2</sub></b>
</tt>

Let's assume the first type of enemy tanks has the generator with initial parameters (start_id = 11, increasing, normal). So, the serial id's are 11, 12.
The second type of tank generator is (start_id = 234, decreasing, ulam12). So, the serial id's are 233, 232, 231.

<b>One possible output:</b>
-1
2 3

Destroy cost = 2 * 10 + 3 * 111 = 353, the other costs are 0, and you will get 1.0 score for this.

<b> Another possible solution / communication </b>
<tt>
0          <--- output : capture request
2 233      <--- input : type, serial_id
0          <--- output : capture request
1 11       <--- input : type, serial_id
1          <--- output : capture request
1 12       <--- input : type, serial_id
1          <--- output : capture request
1 -1       <--- input : type, serial_id
-1         <--- output : we don't need more information
0 1        <--- output : our guess

capture_cost = 2 * 111 + 1 * 112 = 334
destroy_cost = 0 * 10 + 1 * 111 = 111 
penalty_cost = 0 * 113 + 1 * 1000 = 1000

score = 1445 / (2*10 + 3 * 111) = 4.093
</tt>
</pre>

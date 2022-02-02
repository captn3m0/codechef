---
{"category_name":"challenge","problem_code":"ANUMFS","problem_name":"The Malaysian Flight Search","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"xcwgf666","date_added":"29-03-2014","tags":{"0":"anudeep2011","1":"challenge","2":"interactive","3":"may14"},"editorial_url":"http://discuss.codechef.com/problems/ANUMFS","time":{"view_start_date":1399887000,"submit_start_date":1399887000,"visible_start_date":1399887000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/ANUMFS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/ANUMFS.pdf">Russian</a>.</h3>
<h3>Problem description.</h3>
<p>Malaysia Airlines Flight MH370 disappeared on March 8th with 239 people aboard. After a lot of theories and extensive search, the Prime Minister of Malaysia declared that the flight was crashed in the Indian Ocean.</p>

<p>After gathering information, the area where the Black Box is present has been identified. The Black Box has a signal transmitter which responds to a special kind of signal.</p>

<p>We have search planes which can go to a particular location, and send the special kind of signal in all directions to a certain range. If the Black Box receives that signal, it will respond back.</p>

<p>As the location of crash is very far from nearest land and the cost to operate planes are high, Officials would like to minimize the total cost of this search operation. You are to write a program to help them</p>

<p>For the purpose of this problem, we consider 2-D coordinate system, forget about the depth of Indian Ocean and the following are true:
<ul>
<li>We have many planes with us, each plane is defined by 3 variables (<b>I</b>, <b>R</b>, <b>C</b>). <b>I</b> is the unique id of the plane. <b>R</b> is the range it can transmit the special signal. <b>C</b> is the amount of Rupees (Yes, we are operating from India) required for one unit of travel.</li>
<li>All the planes are present at (0,0).</li>
<li>Same plane can be used any number of times.</li>
<li>All the distances we consider in this problem are Manhattan distance. Distance between (a,b) and (c,d) is <b>abs(a-c)+abs(b-d)</b>.</li>
<li>Given the plane id, and coordinates (x,y) from where it has to transmit the special signal, the plane moves from (0,0) to (x,y), transmits the signal, records the reply from Black Box if any, and returns to (0,0)</li>
<li>Cost of above operation would be sum of costs for (0,0) to (x,y) and (x,y) to (0,0), i.e, 2*(x+y)*C Rupees</li>
<li>Black Box at position (a,b) responds to special signal from a plane at (x,y) with range <b>r</b> if abs(a-x) + abs(b-y) <= r</li>
<li>We always have a plane with <b>R = 0</b>.</li>
<li>The Black Box need not be present inside the search area. It is possible that the Officials got wrong search area. Note that the Black Box can still respond to special signals.</li>
</ul>
</p>

<p>This is an Interactive Problem, you will be given details of all available planes, and description of area inside which the Black Box is expected to be present. You need to issue commands of the form (<b>I</b>, <b>x</b>, <b>y</b>) which means that you would like to send plane with id <b>I</b> to position (<b>x</b>, <b>y</b>) and give the special signal. The automated judge will respond with "yes" or "no", "yes" if the Black Box responded, "no" otherwise.</p>

<h3>Input</h3>
<ul>
<li>First line of input contains <b>n</b>, the number of coordinate points that are present on the search area boundary.</li>
<li>Following <b>n</b> lines contain 2-D coordinates. Note that all the points on the boundary are given in the input. The boundary walls are always parallel to either of X-axis or Y-axis.</li>
<li>Next line of input contains <b>m</b>, the number of planes available.</li>
<li>Following <b>m</b> lines contains 2 integers <b>R</b> and <b>C</b>. Each plane is given Id in input order starting from 0. So the first plane has Id 0, and the last plane has Id <b>m-1</b>.</li>
</ul>

<h3>Output</h3>
<ul>
<li>To give a command, print 3 integers <b>I</b> <b>x</b> <b>y</b> as defined above.</li>
<li>To stop the search and report answer, print 3 integers <b>-1</b> <b>x</b> <b>y</b> where <b>(x,y)</b> is the location of the Malaysia Airlines Flight MH370</li>
<li>If the Flight is not present in the search area, print <b>-1 -1 -1</b>.</li>
</ul>

<h3>Special</h3>
<p>Attention: the program should clear the output buffer after printing each line. It can be done using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout). Failure to flush the output buffer will result in Time Limit Exceeded verdict.</p>
<p>
For example, at C/C++ you could use the following routines:
<pre>
bool SendPlane(int id, int x, int y) {
    printf("%d %d %d\n", id, x, y);
    fflush(stdout);
    char temp[4];
    scanf("%s", temp);
    return temp[0]=='y';
}
</pre>
</p>

<h3>Sample Input/Output</h3>
<b>NOTE : This sample input/output does not follow constrains</b><br/>
<pre>
<tt>in: 4
in: 1 1
in: 1 2
in: 2 2
in: 2 1
in: 2
in: 0 100
in: 1 200
out: 0 1 1
in: no
out: 0 2 2
in: no
out: 0 1 2
in: yes
out: -1 1 2</tt>
</pre>

<h3>Explanation</h3>
<p>The search area is a square of unit lenght with bottom left corner at (1,1). The missing flight is located at (1,2).
We took all the input. Then issued the plane 0 to go to (1, 1). Special judge returned "no". Finally we issued the plane 0 to go to (1, 2) and special judge gave "yes". So we found the missing flight. we then output the same by giving command "-1 1 2". Score will be 2*(1+1)*100 + 2*(2+2)*100 + 2*(1+2)*100 = 1800/4 = 450.</p>

<h3>Constraints</h3>
<b>Search Area:</b><br/>

<ul><li><b>1000</b> ≤ <b>n</b> ≤ <b>5000</b></li>
<li>Distance from <b>(0,0)</b> to any point in the search area ≤ <b>100000</b></li>
<li><b>100000</b> ≤ Number of Integer Coordinate points inside the search area ≤ <b>200000</b></li>
<li>You can always enclose the whole search area in a 1024*1024 square</li>
<li>See test data generation for more details.</li></ul>

<b>Planes:</b>
<ul><li><b>40</b> ≤ <b>m</b> ≤ <b>50</b></li>
<li><b>0</b> ≤ <b>R</b> ≤ <b>600</b></li>
<li><b>100</b> ≤ <b>C</b> ≤ <b>10000</b></li>
</ul>

<h3>Test Data Generation</h3>
<p>
<b>Search Area:</b> <br/>
Step 1 : A square of size 1000*1000 is taken, number of points inside are 10^6.<br/>
Step 2 : A rectangle of size <b>w*h</b> is taken such that <b>w</b> and <b>h</b> are less than 400. Now this rectangle is placed on some random boundary point of the initial square. All the points that fall into this rectangle are removed from initial set of points.<br/>
Step 3 : Step 2 is repeated until atmost 200000 points are left. Then it is continued until a random condition fails.<br/>
Step 4 : Now we are left with at most 200000 points. This points define the search area, but in input only the points that lie on boundary are given.
</p>

<p><b>Sample Graph : </b> <a href="http://www.codechef.com/download/ANUMFS.png">Click Here</a></p>

<p><b>Planes:</b><br/>
Refer constrains section for details about <b>m</b>, <b>R</b>, <b>C</b>. <b>m</b> and <b>C</b> are randomly chosen. Details about generation of <b>R</b> will not be disclosed.We always have a plane with <b>R = 0</b></p>

<p><b>Missing flight:</b><br/>
With 0.65 probability the flight is kept inside the search area.<br/>
Position is close to boundary points and is randomly chosen with probability 1 (always) given that it is <b>outside</b> the search area</p>

<h3>Scoring</h3>
<p>For all the issued commands of the form <b>I x y</b>, <b>I</b> has to be valid id, <b>(x,y)</b> must be a coordinate point inside the search area (On the boundary points are also valid). Not satisfying this constrains will result in Wrong Answer.</p>

<p>For the command of the form <b>-1 x y</b>, If <b>(x,y)</b> is outside the search area, or there is no Flight at <b>(x,y)</b>, it will result in Wrong Answer.</p>

<p>For the command of the form <b>-1 -1 -1</b>, If the fligh is actually present inside the search area, it will result in Wrong Answer.</p>

<p>Let <b>Cost</b> be the total cost of the Search operation. Now score for that test file is <b>Cost/Number Of Coordinate points inside search area</b>. It will show as Wrong answer if <b>Cost</b> is greater than 4*10^12 or number of commands issued is greater than 5*10^5.</p>

<b>EDITS MADE</b><br/>
<p><b>Old :</b>It will show as Wrong answer if <b>Cost</b> is greater than 10^9 or number of commands issued is greater than 5*10^5.</p>

<p><b>New :</b>It will show as Wrong answer if <b>Cost</b> is greater than 4*10^12 or number of commands issued is greater than 5*10^5.</p>
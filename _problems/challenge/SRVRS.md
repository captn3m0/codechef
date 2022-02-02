---
{"category_name":"challenge","problem_code":"SRVRS","problem_name":"Servers (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"alexvaleanu","problem_tester":null,"date_added":"4-07-2017","tags":{"0":"alexvaleanu","1":"challenge","2":"datastructres","3":"july17","4":"kdtree"},"editorial_url":"https://discuss.codechef.com/problems/SRVRS","time":{"view_start_date":1500283800,"submit_start_date":1500283800,"visible_start_date":1500283800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY17/mandarin/SRVRS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/russian/SRVRS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/vietnamese/SRVRS.pdf">Vietnamese</a> as well.</h3>

<p>
  The Chef and Batman are working on the new computer network for the Batcave. The Batcave can be thought as a 2D plane and it contains
  all <b>N</b> servers (advanced host machines). Every server is located at a single point on this 2D plane and can't change places (the computers are very heavy so moving
  them is next to impossible).
  Each server has a few CPUs (central processing unit), each having some processing time (i.e. the time it takes to run a task). You can consider that
  all tasks require the same resources (two different tasks that run on the same CPU of the same server take the same time to execute).
  After many hours of hard work, the network seems ready and our two heroes want to test it using a slightly complicated test framework.
</p>

<p>
  Their test consists of <b>Q</b> queries. Each query is actually a task (given as a point in the same 2D plane). This task has to be executed on some
  available CPU (of some server in the network). A CPU (of some server) is available if there is <b>no</b> task that currently runs on it.
  For example, if a task arrives at time <b>5</b> and is executed on a CPU with a processing time of <b>10</b> then the CPU is busy in <b>[5..14]</b>
  (i.e. it is again available at time <b>15</b>). Any attempt to execute a task on a busy CPU will be punished with a network crash (and neither Chef nor Batman wants to
  reconfigure the whole network again).
</p>

<p>
  There is a cost associated with scheduling (and running) a task. Let's assume that we have a server, located at <b>(a, b)</b>, with a CPU of processing time <b>p</b>.
  If you execute a task located at <b>(x, y)</b>, then the cost will be <b><em>euclid_distance((a, b), (x, y)) + p</em></b>
  (which is the cost of sending the task to the server plus the time to actually run the task on the CPU).
</p>

<p>
  The test framework is not perfect and doesn't allow multiple tasks waiting to be executed at the same time (i.e. the network will receive another task only after all previous tasks
  have been scheduled and are running or have finished). We can say that the interaction between the testing framework and the network is <b>interactive</b>.
</p>

<p>
  Assigning a task to a (server, cpu) pair is a hard task so Batman and Chef want you to help them.
</p>

<h3>Input</h3>
<p>
  The first line of the input file contains two integers, <b>N</b> and <b>Q</b>, where <b>N</b> is the number of servers and
  <b>Q</b> is the number of queries.
</p>
<p>
  The i-th of the next <b>N</b> lines contains the description of the i-th server. The servers are 1-indexed.
</p>
<p>
  A server is described by a sequence of integers: <b>x y k p<sub>0</sub> p<sub>1</sub> ... p<sub>k-1</sub></b>. <b>x</b> and <b>y</b> represent the location of the server in the plane. <b>k</b> represents the number of CPUs the server has.
  The j-th of the next <b>k</b> integers indicates the processing time of its j-th CPU. The CPUs are 1-indexed.
</p>

<p>
  The <b>Q</b> tasks can be obtained by using the command specified below, in the <b>Interactive</b> segment.
</p>

<h3>Output</h3>
<p>
  The output file should contain <b>Q</b> lines, each line containing two integers: <b>s<sub>i</sub></b> and <b>c<sub>i</sub></b>, where <b>s<sub>i</sub></b> is the index of the server and
  <b>c<sub>i</sub></b> is the index of the CPU on that server that runs the <i>i</i>th task.
</p>

<h3>Interactive</h3>
<p>The problem is <b>interactive</b>. You will get the coordinates of each task one at a time after you have given an answer for the previous query.
  There are three possible commands:
  <ul>
    <li><b>?</b></li>
    <li><b>! x y</b></li>
    <li><b>end</b></li>
  </ul>
<p></p>
  For each query, you are supposed to ask for the task's coordinates by using the <b>?</b> command and then report your answer by using the <b>!</b> command.
  Any other variation of commands will result in a WA.
  The answer is not valid if the server and/or CPU doesn't exist or if that CPU is busy at that time.
  The communication <b>must</b> end with a call to the <b>end</b> command.
The queries are separated by 1 unit of time, and they should be scheduled immediately.
</p>

<p>
  <b>Note</b>: Please end any command with a '\n' and remember to flush the buffers.
</p>

<h3>Scoring</h3>
<p>
  Your score for one test is the sum of costs for all the queries (using the cost measure from the problem's description).
  The final score is the sum of scores in all tests. The goal is to <b><em>minimize</em></b> that score.
</p>
<p>
  If your program works incorrectly (e.g. it exceeds the time limit or the answer is not valid) on any of the tests, you will get a suitable verdict (e.g. TLE or WA).
  Otherwise, you will get AC and your score will be decided by only a part of the tests (see test generation). The final score will be revealed after the contest.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100,000</b></li>
<li>The total number of CPUs is at most <b>500,000</b>.</li>
<li>A server can have no CPUs. That is, <b>k</b> can be 0.</li>
<li>All servers and CPUs are indexed from <b>1</b>.</li>
<li>All coordinates are between <b>0</b> and <b>100,000</b>.</li>
<li>All processing times are between <b>0</b> and <b>85,000</b>.</li>
<li>The tasks and servers may overlap (two tasks or a task and a server or two servers can share coordinates).</li>
<li>The first task arrives at time <b>0</b> (the second one is at time 1 and so on).</li>
<li>It is guaranteed that the number of tasks is not greater than the number of cores (i.e. there is  no strategy that leaves you with no available CPU for some task).
<li>If a task is executed at time <b>t</b> on a CPU of processing time <b>p</b> then the CPU will be busy in the time interval <b>[t, t+1, ..., t+p-1].</b>
  (the CPU becomes available at time <b>t+p</b>).</li>
<li>A task cannot be stopped or rescheduled.</li>
<li><b>Note</b>: there is <b>no</b> actual time-stamp associated with a task. The times are introduced so it is easier to express the availability of a CPU
       and the fact that tasks arrive one after the other (separated by one unit of time). The judge also uses time <b>0</b> as the original time in order to check if a schedule is valid.</li>
<li><b>Note</b>: We use the <b>classical euclidean distance</b>: <em>euclid_distance((a, b), (x, y)) = sqrt((a - x)<sup>2</sup> + (b - y)<sup>2</sup>)</em></li>
<li><b>Note</b>: The TL is given for one test and not for a single interaction (i.e. single message exchange).</li>
</ul>

<p></p>
<h3>Test generation</h3>
<p>There are several types of datasets:</p>
  <ul>
    <li>Dataset #0: single server
      <ul>
      <li><b>N</b> = <b>1</b></li>
      </ul>
    </li>
    <li>Dataset #1: small network
      <ul>
      <li><b>2</b> ≤ <b>N</b> ≤ <b>100</b></li>
      </ul>
    </li>
    <li>Dataset #2: small number of tasks
      <ul>
      <li><b>Q</b> ≤ <b>1000</b></li>
      </ul>
    </li>
    <li>Dataset #3: fast network
      <ul>
      <li>All processing times ≤ <b>1000</b></li>
      </ul>
    </li>
    <li>Dataset #4: small Batcave
      <ul>
      <li>All coordinates ≤ <b>3000</b></li>
      </ul>
    </li>
    <li>Dataset #5: random network and testing framework
    </li>
  </ul>
</p>

<p>Distribution (20 tests):
  <ul>
    <li>single server: 3 tests</li>
    <li>small network: 2 tests</li>
    <li>small number of tasks: 2 tests</li>
    <li>fast network: 3 tests</li>
    <li>small Batcave: 4 tests</li>
    <li>random network: 6 tests</li>
  </ul>
</p>

<p><b>Note: During the contest your code will run against only one test from each type of dataset.</b></p>

<h3>Example</h3>
<pre><b>Input:</b>
2 3
9 9 2 7 9
0 0 2 10 5
0 2
5 7
8 3

<b>Output:</b>
2 2
1 1
1 2
</pre>

<h3>Explanation</h3>
<p>There are 3 tasks that are given as 2D points (0,2), (5,7) and (8,3).</p>
<p>There are 2 servers, each having 2 CPUs.</p>
<p>The first server has two CPUs of times 7 and 9.</p>
<p>The second server has two CPUs of times 10 and 5.</p>

<p>The user should first read the description of the servers from standard input (as mentioned in the Input section). Then, the interaction between the two programs (3 bi-directional message exchanges and the end command) should be:</p>
<pre>
<b>User</b>            <b>Judge</b>

?
                      0 2
! 2 2
?
                      5 7
! 1 1
?
                      8 3
! 1 2
end

</pre>
<p>The cost of the first query: sqrt((0 - 0)<sup>2</sup> + (0 - 2)<sup>2</sup>) + 5 = sqrt(4) + 5 = 7</p>
<p>The cost of the second query: sqrt((9 - 5)<sup>2</sup> + (9 - 7)<sup>2</sup>) + 7 = sqrt(4<sup>2</sup> + 2<sup>2</sup>) + 7 = sqrt(16 + 4) + 7 = 11.472135</p>
<p>The cost of the third query: sqrt((9 - 8)<sup>2</sup> + (9 - 3)<sup>2</sup>) + 9 = sqrt(1<sup>2</sup> + 6<sup>2</sup>) + 9 = sqrt(1 + 36) + 9 = 15.082762</p>

<p>The score for this test is the sum of all costs: 7 + 11.472135 + 15.082762 = 33.554897

<p>Note: the answer is clearly not unique and in this case is not intended to be optimal.</p>

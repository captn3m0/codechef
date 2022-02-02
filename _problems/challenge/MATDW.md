---
{"category_name":"challenge","problem_code":"MATDW","problem_name":"Mathison and the Data Warehouse (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"alexvaleanu","problem_tester":null,"date_added":"31-07-2017","tags":{"0":"alexvaleanu","1":"aug17"},"editorial_url":"https://discuss.codechef.com/problems/MATDW","time":{"view_start_date":1503048600,"submit_start_date":1503048600,"visible_start_date":1503048600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
  After finishing his internship at <a href="https://deepmind.com/">DeepMind</a>, Mathison has started his own company. Knowing that storing data is probably the most important thing a company should take care of, he decided to manage a data warehouse.
  DWs are central repositories of integrated data from one or more disparate sources. They store current and historical data in one single place and are used for creating analytical reports for knowledge workers throughout the enterprise (check <a href="https://en.wikipedia.org/wiki/Data_warehouse">Wikipedia</a>  for more details).
</p>

<p>
  Managing a DWH is not an easy task so Mathison would like you to help him. In this task, you have to implement a simplified version of a data warehouse managing system. A DWH managing system is an <b>interactive</b> application that handles users' requests,
  stores and retrieves data, buys hard disk drives (HDDs) and much more.
</p>

<p>
  Your application must handle three types of events:
  <ul>
    <li><b>0 cid q</b></li>
    Client with id <em>cid</em> wants to store <em>q</em> cells of data.
    <li><b>1 cid p</b></li>
    Client with id <em>cid</em> wants to retrieve his <em>p-th</em> data-cell.
    <li><b>2 hid</b></li>
    Hard-disk with id <em>hid</em> has crashed and all data that was stored on it is lost. The hard-disk can still be used in the future!
  </ul>
</p>
  <p>In order to simplify the problem, you can assume that a client is allowed to store data only once. But he is allowed to query the warehouse as many times as he wants.</p>
  <p>A client will not query
  the data warehouse if he has no data stored!</p>

<p>
  In order to handle some events, your application can send these types of commands involving storing/retrieving data:
  <ul>
    <li><b>s hid pid</b></li>
    This command <b>must</b> follow a client's request to store data and means that you store the previous client's data on hard-disk <em>hid</em>, starting at cell <em>pid</em> (0-based indexing) <br /> For example, you might have a request of form <b>0 100 10</b>.
    The client with id 100 wants to store 10 units (cells) of data in our warehouse. Let's assume you have a hard-disk (with id 5). You can respond with a command
    <b>s 5 120</b>, meaning that you store the client's 100 units of data on only one hard-disk, hdd5 from cell 120 to cell 129. All ids <b>must</b> be valid. You must be careful not to overflow any HDD!<br />
    <b>Note: You can choose not to store the data (a risky move). In this case, you have to print -1 -1 for <em>hid</em> and <em>pid</em>. No penalty fee will be charged in this case!</b>
  </em?>
    <li><b>i hid pid</b></li>
    This command <b>must</b> follow a client's request to retrieve his data. <br /> For example, let's assume that you had the commands described above and you get a new one <b>1 100 5</b>. In this case, we have to respond with <b>i 5 125</b> as you
    stored the data from client 100 on hdd5 and the <em>5-th</em> cell of data is located on the <em>125-th</em> cell on hdd5.<br />
    <b>Note: If you do not have the requested data, <em>hid</em> and <em>pid</em> must be equal to -1 (and you will pay a <b>fixed penalty</b> - see input and scoring sections).<br /> Note: If you report a false information (i.e. the <em>pid-th</em> cell
    on the hdd <em>hid</em> doesn't contain the request cell), you will get a WA. Everyone hates fake information!</b>
  </ul>
</p>

<p>
  There are other types of commands that you can use in order to manage the data warehouse:
  <ul>
    <li><b>b t</b></li>
    Buy a new hard-disk of type <em>t</em>. The newly purchased hard-disk will get the next available id starting from zero (the first one you buy will have id 0, the second one will have id 1 and so on).
    <li><b>cp hid<sub>source</sub> pid<sub>source</sub> q hid<sub>destination</sub> pid<sub>destination</sub></b></li>
    Copy <em>q</em> cells of data from hard-disk <em>hid<sub>source</sub></em>, starting at <em>pid<sub>source</sub></em>, to hard-disk <em>hid<sub>destination</sub></em>, starting at <em>pid<sub>destination</sub></em>.
  </ul>
</p>

<h3>Interactive</h3>
<p>
  This task is <b>interactive</b>. You have to write a program that will interact with a custom judge (i.e. the judge is deterministic but the events you get will depend on your program behavior).<br /> You have to start by reading the number of events,
 the number of types of hard-drives and their description (see Input section for more details). This information doesn't depend on your program.<br/> Then you are able to exchange messages with the judge. There are three types of messages:
  <ul>
    <li><b>g</b></li>
    If there are still events to handle, you can use this type of message to get a new one. You will get a event of one of the three types described in above.<br />
    <b>Note</b>: If you ask for a new request even if you haven't solved the last one or if there are no more events you will get a WA.
    <li><b>p cmd</b></li>
    You can use this type of message to send a command <b>cmd</b> to the judge. The command can have any form described in the statement.
    <li><b>end</b></li>
    This message <b>must</b> be sent in order to end the interaction with the judge. If the message is not sent the judge will crash with a WA.
  </ul>
	<p><b>Note: Both types of messages must end with a newline ('\n' character)</b>.</p>
  <p><b>Note: Don't forget to flush the output buffer (i.e. stdout)</b>.</p>
</p>

<h3>Scoring</h3>
<p><q>Everything has a price!</q></p>
<p>Hard-disks cost money and they read and write at different speeds (so there are different costs for reading/writing)</p>
<p>Storing and retrieving data also has a price. </p>
<p>If you store <em>q</em> units of data on a hard-disk that writes data at <em>w</em> units per second the cost of this operation will be <em>q * w</em>.</p>
<p>If you read <em>q</em> units of data from a hard-disk that reads at speed <em>r</em> units per second, the operation will cost you <em>q * r</em>.</p>
<p>If you do not have some requested data (you didn't store it or you overwrote the cell) you <b>must</b> pay a fixed <b>penalty</b>.</p>
<p>Your score for one test is the sum of costs for all the commands that you make. </p>
<p>The final score is the sum of scores in all tests. The goal is to <b>minimize</b> that score.</p>
<p>If your program works incorrectly on any of the tests, you will get a WA. Otherwise, you will get AC and your score will be decided by only a fraction of the tests (see test generation). The final score will be revealed after the contest.</p>

<h3>Input</h3>
<p>The first line of the input file contains two integers, <b>N</b> and <b>H</b>, where <b>N</b> is the number of events and <b>H</b> is the number of types of hard-disks available.</p>
  The next <b>H</b> lines will contain 4 integers <b>p</b> <b>r</b> <b>w</b> <b>c</b> (separated by spaces), where <b>p</b> is the price associated with this type of hard-disk, <b>c</b> is the capacity (there are <b>c</b> data-cells) and <b>r</b> and <b>w</b> are the reading/writing speeds (costs) or this type.<br />
  The next line will one contain integer, <b>penalty</b>, the penalty you pay if you don't have the requested data.<br />
  All <b>N</b> events are generated by the judge when they are requested by your program.
</p>

<h3>Output</h3>
<p>The output file will be your program's interaction with the judge.</p>
<p><b>Note</b>: Please read the constraint on the maximum number of messages!</p>

<h3>Constraints and extra notes</h3>
<ul>
  <li><b>Note: Do NOT add extra spaces or tabs in any message or command! You will probably get a WA verdict.</b></li>
  <li><b>Note: You are allowed to send at most 40,000 p (POST) messages. </b></li>
  <li><b>Note: Copying data from a hard-disk to another doesn't affect the source hdd but overwrites the cells in the second one. Only bounds are checked!</b></li>
  <li><b>Note: The judge might return a WA even if another verdict was expected (ex: waiting for a response)</b></li>
  <li><b>Note: The judge is NOT adaptive! (i.e. it won't try to purposely generate events to increase your score)</b></li>
  <li><b>Note: All commands are executed in linear time! (ex: a cp command is done in O(q))</b></li>
  <li>A message is what you send/receive to/from the judge. A command is an instruction that is contained within a message and is designed to be executed by the DWH managing system!</li>
  <li>A unit of data is equal to one cell.</li>
  <li>There are 20,000 events (i.e. <b>N = 20,000</b> for all tests).</li>
  <li>There are at most 10 types of hard-disks.</li>
  <li><b>You can buy at most 1050 hard-disks.</b></li>
  <li>The price of a hard-disk is an integer between 1 and 200,000</li>
  <li>The capacity of a hard-disk is an integer between 1 and 25,000</li>
  <li>The reading and writing speeds are integers between 1 and 1000</li>
  <li>The penalty is an integer between 50,000 and 700,000</li>
  <li>Clients can be uniquely identified by their ids, which are numbers between 1 and 100,000</li>
  <li><b>A client can store at most 1000 data-cells.</b></li>
  <li>A client can store data <b>only once</b>.</b></li>
  <li>A client can ask for his data <b>multiple times</b>.</b></li>
  <li>Everything is <b>0-based</b> (unless otherwise specified).</li>
  <li>You <b>must</b> print <b>-1 -1</b>if you do not have some requested cell! Any other pair of numbers will get you a WA!</li>
  <li>A hard-disk can crash multiple times. The data will be erased (and lost) every single time! The hard-disk can be reused after that!</li>
  <li>It is guaranteed that for all input files will contain at least one type of hard-disk with capacity <b>at least 10,000.</b></li>
  <li>There are only male clients because the author was too lazy to add 'she' or 'her' all over the statement.</li>
  <li>The author would like to apologize for the long statement!</li>
</ul>

<h3>Test generation</h3>
<p>
  There are 20 tests. For each one of them <b>N</b>, <b>H</b>, the hard-disks' descriptions and the penalty were created 'by hand' (i.e. are not random).<br />
  All events are generation on the run (randomly), based on your program.</p>
<p>
  Each type of hard-disk is a small variation of the below types:
  <ul>
  <li>A very cheap (less than 10) hard-disk with low costs (less than 25) for reading and writing but small (less than 50) capacity.</li>
  <li>A very expensive (at least 85,000) hard-disk with low costs (less than 25) for reading and writing and big (at least 1000) capacity.</li>
  <li>A decent-priced (about 1000) hard-disk with low (less than 25) read (or write) cost and small (about 50) capacity.</li>
  <li>Randomly generated (all 4 attributes) hard-disks!</li>
  </ul>
  <br />
  <b>Note</b>: There is <b>no</b> guarantee that each test will contain at least one hard-disk from every category!
</p>

<p>
  There are several types of datasets:
  <ol type="1">
    <li>Events distribution: 20% store, 70% index, 10% crash (4 tests)</li>
    <li>Events distribution: 50% store, 45% index, 5% crash (3 tests)</li>
    <li>Events distribution: 60% store, 35% index, 5% crash (3 tests)</li>
    <li>Events distribution: 70% store, 20% index, 10% crash (3 tests)</li>
    <li>Events distribution: 35% store, 50% index, 15% crash (4 tests)</li>
    <li>Events distribution: 49% store, 50% index, 1% crash (3 tests)</li>
  </ol>
  During the contest, your program will run on 6 tests (one from each category).
</p>

<h3>Example</h3>
<pre><b>Input:</b>
5 2
100 10 20 2000
50 20 10 2000
30000
</pre>

<b>Interaction</b>
The user should first read N, H, the description of the hard-disks, and the penalty from standard input (as mentioned in the Input section).
Then, the interaction between the two programs (some message exchanges and the end command) should be:

<pre>
<b>User</b>              <b>Judge</b>
p b 0
p b 1
g
                          0 123 200
p s 0 0
g
                          1 123 55
p i 0 55
p cp 0 10 45 1 10
g
                          2 0
g
                          1 123 0
p i -1 -1
g
                          1 123 12
p i 1 12
end
</pre>

<h3>Explanation</h3>
<p>The cost for buying the two hard-disks is 100 + 50 = 150.</p>
<p>The store operation is executed on a hard-disk of type 0 and so it costs 20 * 200 = 4000.</p>
<p>The first post operation (the first index) is just a read on a type 0 hdd and so it costs 10.</p>
<p>The second post operations is a copy from a type 0 hdd to a type 1 hdd and so it costs: 10 * 45 (to read) + 10 * 45 (to write) = 450 + 450 = 900.</p>
<p>The crash doesn't cost you a thing! :)</p>
<p>The fourth get will cost you a penalty fee (of 30000) because the <em>0-th</em> cell was not copied on the second hard-disk and was erased by the crash.</p>
<p>The fifth (and last) get is a read from a type 1 hdd and so it costs 20.</p>

<p>The total score for this test is 150 + 4000 + 10 + 900 + 30000 + 20 = 35080.
</p>

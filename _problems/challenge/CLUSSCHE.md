---
{"category_name":"challenge","problem_code":"CLUSSCHE","problem_name":"Scheduling jobs on a cluster","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"mugurelionut","date_added":"27-06-2016","tags":{"0":"admin2","1":"challenge","2":"greedy","3":"july16","4":"randomized"},"editorial_url":"http://discuss.codechef.com/problems/CLUSSCHE","time":{"view_start_date":1468402200,"submit_start_date":1468402200,"visible_start_date":1468402200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/mandarin/CLUSSCHE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/russian/CLUSSCHE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/vietnamese/CLUSSCHE.pdf">Vietnamese</a> as well.</h3>
<p>There is a cluster of computers. Each computer is referred as a node. You are the maintainer of the cluster. Your job is to execute various jobs that you receive for execution. You can transfer a job from a node on the cluster to some other node. It will require some network cost.
</p>
<p>
The jobs come in the batches. Each job will have its desired initial node on which it was thought to be run by its programmer. It will also require some processing power to run in a node. You have to process the jobs of the batch, i.e. you have to decide on which node the job should be executed. You can transfer the job through various nodes before assigning the final node.
</p>
<p>
Being the cluster maintainer, your aim is to optimally use the resources of the cluster. You want the load on the nodes of the cluster to be balanced. Also, you don't want to spend a huge networking cost in transferring the jobs in between the nodes.
</p>
<h3>Input</h3>
<p>The problem is an interactive challenge problem.</p>
<p>First line of the input will contain four space separated integers <b>N, M, B, C</b> denoting number of nodes in the cluster, the total number of batches of the jobs, batch size, i.e. number of jobs per batch and maximum network cost that you can afford respectively.</p>
<p>Each of the next <b>N</b> lines, contains <b>N</b> space separated integers denoting the network cost required for moving the job among corresponding nodes.</p>
<p>Each of the next <b>M</b> lines contains <b>2 * B</b> integers denoting the nodes on which the job was scheduled to run and the processing power it will require.</p>
<h3>Output</h3>
<p>After reading a batch, you should output <b>B</b> integers, each showing the corresponding node on which the job is assigned. <b>Note that</b> network cost spent in moving this job from a node to other node will be equal to shortest network cost required.</p>
<h3>Example</h3>
<pre>
<b>Input</b>	<b>Output</b>
2 2 2 2
0 1
1 0
1 3
2 4
		1
		2
1 2
2 3
		2
		1
</pre><h3>Explanation</h3>
<p>
In our example, number of nodes, number of batches and number of jobs per batch and networking cost, all are equal to 2. Cost of moving a job from node 1 to node 2 is 1.
</p>
<p>
In the first batch, there are two jobs, first job is intended to run at node 1. It will require a processing power of 3. The second job is intended to run on node 2 requiring a processing power of 4 units. You have decided to run job 1 at node 1 and job 2 at node 2, i.e. at the nodes where they were initially supposed to run. So, no network cost has been incurred for it.
</p>
<p>
In the second batch, there are two jobs also, first job is intended to run at node 1. It will require a processing power of 2 units. The second job is intended to run on node 2 requiring a processing power of 3 units. You have decided to run job 1 at node 2 and job 2 at node 1. For first job, you are moving the job from the node 1 to node 2, for which you have to spend a network cost of 1 units. Similarly job 2 also requires a networking cost of 1 units.
</p>
<p>
Total network cost incurred in this solution is 2 units which was the maximum network cost allowed.
</p>
<h3>Scoring</h3>
<p>After assigning all the jobs of a batch, load unbalancing factor of the cluster will be measured. Let load on a node be total sum of processing powers of the jobs assigned on this cluster. Please note that his accounts for all the jobs assigned to this node, not just the jobs assigned in the current batch. In particular, it will also include all older batches of jobs too. Load unbalancing factor of the cluster will be equal to maximum load on some node minus the minimum load on some node. Total unbalancing factor will be sum of load unbalancing factor over all the batch jobs.</p>
<p>
Let us calculate the load unbalancing factor in the above example.
</p>
<p>
Let us consider the first batch of jobs. At node 1, we are running a job requiring processing power of 3 units and that at node 2 of 4 units. So, load unbalancing factor is 4 - 3 = 1.
</p>
<p>
After assigning the jobs of the second batch, we have two jobs at node 1, each of 3 units, i.e. total 6 units of processing power required. At the second node, we have two jobs running, one requiring a processing power of 4 and other of 2, total 6 units. So load unbalancing factor is 6 - 6 = 0.
</p>
<p>
Overall, total sum of load unbalancing factors for these two batches will be 1 + 0 = 1. So, your score will be 1.
</p>
<h3>Test Generation Process</h3>
<p>
There will be two types of data sets, small and large - 10 test files for each. During the contest, the score will be shown for only 20% of the test cases, i.e. 2 files from each of the data sets. Please note that your submission will be run for all the 20 test files. For getting an AC verdict, your program should get an AC verdict for all the 20 files. Reiterating, the score shown will only be for the 20% of data, i.e. 4 files. Your final score on all the files will be shown after the end of the contest only.
</p>
<p>
Here is the test generation process for small and large data sets of the problem.</p>
<ul>
<li>Values of <b>N, M, B</b> each will be fixed to 100 for small data set and 500 for large data set.</li>
<li>Maximum network cost <b>C</b> will be generated uniformly randomly from <b>100 * M * B</b> to <b>500 * M * B</b>.</li>
<li>The network cost required for moving a job from a node to other node will be generated uniformly randomly from 1 to 1000. Note that you are guaranteed that cost function will be symmetric, i.e. the cost of moving a job from node x to node y will be same as that of moving job from node y to node x. Also, the cost of moving a job from a node to the same node will be zero.</li>
<li>For each job in a batch, the node on which job is to be scheduled will be generated uniformly randomly from 1 to <b>N</b>. Processing power of the job will also be generated uniformly randomly from 1 to 1000.</li>
</ul>

<p>
Here are some possible things you should keep in mind for making sure your submission does not get an WA (wrong answer) verdict.</p>
<ul>
<li>You have to process each batch of jobs before reading the next batch. Please don't forget to flush the standard output before reading the next batch. You can flush standard output by using fflush(stdout) in C/C++.</li>
<li>Total network cost for moving the jobs from one node should not maximum network cost <b>C</b>.</li>
</ul>

<p>
Finally, your aim is to minimize the total load unbalancing factor.
</p>

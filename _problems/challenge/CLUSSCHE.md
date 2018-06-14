---
category_name: challenge
problem_code: CLUSSCHE
problem_name: 'Scheduling jobs on a cluster'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: mugurelionut
date_added: 27-06-2016
tags:
    - admin2
    - challenge
    - greedy
    - july16
    - randomized
editorial_url: 'http://discuss.codechef.com/problems/CLUSSCHE'
time:
    view_start_date: 1468402200
    submit_start_date: 1468402200
    visible_start_date: 1468402200
    end_date: 1735669800
    current: 1525199509
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY16/mandarin/CLUSSCHE.pdf), [Russian](http://www.codechef.com/download/translated/JULY16/russian/CLUSSCHE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY16/vietnamese/CLUSSCHE.pdf) as well.

There is a cluster of computers. Each computer is referred as a node. You are the maintainer of the cluster. Your job is to execute various jobs that you receive for execution. You can transfer a job from a node on the cluster to some other node. It will require some network cost.

The jobs come in the batches. Each job will have its desired initial node on which it was thought to be run by its programmer. It will also require some processing power to run in a node. You have to process the jobs of the batch, i.e. you have to decide on which node the job should be executed. You can transfer the job through various nodes before assigning the final node.

Being the cluster maintainer, your aim is to optimally use the resources of the cluster. You want the load on the nodes of the cluster to be balanced. Also, you don't want to spend a huge networking cost in transferring the jobs in between the nodes.

### Input

The problem is an interactive challenge problem.

First line of the input will contain four space separated integers **N, M, B, C** denoting number of nodes in the cluster, the total number of batches of the jobs, batch size, i.e. number of jobs per batch and maximum network cost that you can afford respectively.

Each of the next **N** lines, contains **N** space separated integers denoting the network cost required for moving the job among corresponding nodes.

Each of the next **M** lines contains **2 \* B** integers denoting the nodes on which the job was scheduled to run and the processing power it will require.

### Output

After reading a batch, you should output **B** integers, each showing the corresponding node on which the job is assigned. **Note that** network cost spent in moving this job from a node to other node will be equal to shortest network cost required.

### Example

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
</pre>### Explanation

In our example, number of nodes, number of batches and number of jobs per batch and networking cost, all are equal to 2. Cost of moving a job from node 1 to node 2 is 1.

In the first batch, there are two jobs, first job is intended to run at node 1. It will require a processing power of 3. The second job is intended to run on node 2 requiring a processing power of 4 units. You have decided to run job 1 at node 1 and job 2 at node 2, i.e. at the nodes where they were initially supposed to run. So, no network cost has been incurred for it.

In the second batch, there are two jobs also, first job is intended to run at node 1. It will require a processing power of 2 units. The second job is intended to run on node 2 requiring a processing power of 3 units. You have decided to run job 1 at node 2 and job 2 at node 1. For first job, you are moving the job from the node 1 to node 2, for which you have to spend a network cost of 1 units. Similarly job 2 also requires a networking cost of 1 units.

Total network cost incurred in this solution is 2 units which was the maximum network cost allowed.

### Scoring

After assigning all the jobs of a batch, load unbalancing factor of the cluster will be measured. Let load on a node be total sum of processing powers of the jobs assigned on this cluster. Please note that his accounts for all the jobs assigned to this node, not just the jobs assigned in the current batch. In particular, it will also include all older batches of jobs too. Load unbalancing factor of the cluster will be equal to maximum load on some node minus the minimum load on some node. Total unbalancing factor will be sum of load unbalancing factor over all the batch jobs.

Let us calculate the load unbalancing factor in the above example.

Let us consider the first batch of jobs. At node 1, we are running a job requiring processing power of 3 units and that at node 2 of 4 units. So, load unbalancing factor is 4 - 3 = 1.

After assigning the jobs of the second batch, we have two jobs at node 1, each of 3 units, i.e. total 6 units of processing power required. At the second node, we have two jobs running, one requiring a processing power of 4 and other of 2, total 6 units. So load unbalancing factor is 6 - 6 = 0.

Overall, total sum of load unbalancing factors for these two batches will be 1 + 0 = 1. So, your score will be 1.

### Test Generation Process

There will be two types of data sets, small and large - 10 test files for each. During the contest, the score will be shown for only 20% of the test cases, i.e. 2 files from each of the data sets. Please note that your submission will be run for all the 20 test files. For getting an AC verdict, your program should get an AC verdict for all the 20 files. Reiterating, the score shown will only be for the 20% of data, i.e. 4 files. Your final score on all the files will be shown after the end of the contest only.

Here is the test generation process for small and large data sets of the problem.

- Values of **N, M, B** each will be fixed to 100 for small data set and 500 for large data set.
- Maximum network cost **C** will be generated uniformly randomly from **100 \* M \* B** to **500 \* M \* B**.
- The network cost required for moving a job from a node to other node will be generated uniformly randomly from 1 to 1000. Note that you are guaranteed that cost function will be symmetric, i.e. the cost of moving a job from node x to node y will be same as that of moving job from node y to node x. Also, the cost of moving a job from a node to the same node will be zero.
- For each job in a batch, the node on which job is to be scheduled will be generated uniformly randomly from 1 to **N**. Processing power of the job will also be generated uniformly randomly from 1 to 1000.

Here are some possible things you should keep in mind for making sure your submission does not get an WA (wrong answer) verdict.

- You have to process each batch of jobs before reading the next batch. Please don't forget to flush the standard output before reading the next batch. You can flush standard output by using fflush(stdout) in C/C++.
- Total network cost for moving the jobs from one node should not maximum network cost **C**.

Finally, your aim is to minimize the total load unbalancing factor.

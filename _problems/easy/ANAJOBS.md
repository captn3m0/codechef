---
{"category_name":"easy","problem_code":"ANAJOBS","problem_name":"Analytics Load Jobs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"dpraveen_adm","problem_tester":null,"date_added":"5-12-2019","tags":{"0":"dpraveen_adm"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1575801000,"submit_start_date":1575801000,"visible_start_date":1575801000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ANAJOBS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given $N$ events for your events-pipeline that writes the events in your system to various tables, depending on the event.

Each event has two parameters, the index of the table in which it should be written and the size of the event payload (either 1 kb or 2kb).

For writing files into tables, you can perform many load jobs. 

A load job is performed as follows. Choose some events that **belong to the same table**. (Note that you can pick any subset of the remaining events, and they do not have to be consecutive). Divide these chosen events into $\leq K$ groups. For each group, concatenate the list of events in the group and add them to a new file. The size of each file will be the sum of the sizes of the payload of events in it.

You are allowed to perform at max $J$ load jobs. You want to minimize the size of the largest file used in the above-mentioned load jobs. Find this minimum possible value.

###Input:

- The first line will contain $T$, the number of test cases. Then the test cases follow.
- The first line of each test case contains three space-separated integers $N, K, J$, respectively.
- Each of the next $N$ lines will contain two space-separated integers $t_i, sz_i$ denoting the table index to write to, and the size of the event payload.

###Output:
For each test case, output in a single line an integer corresponding to the answer of the test case.

###Constraints
- $1 \leq T \leq 10^5$
- $1 \leq N, K, J, t_i \leq 10^5$
- It's guaranteed that the total number of tables in the input is less than or equal to $J$. Thus, it is always possible to put all the events into the tables by using the load jobs.
- $1 \leq sz_i \leq 2$
- Sum of $N$ over all test cases $\leq 10^6$

###Sample Input:
    4
    4 1 2
    1 1
    1 2
    1 1
    1 2
    4 2 2
    1 1
    1 2
    1 1
    1 2
    4 2 1
    1 1
    1 2
    1 2
    1 2
    4 1 4 
    1 2
    2 2
    3 2
    4 2


###Sample Output:
    3
    2
    4
    2

###Explanation
Test case 1. All the events are supposed to be written to table 1. Per load job, you can only load a single file and can make two load jobs at max. In the first load job, you can put the event 1 and 2 into a single file. For the second load job, you can put events 3 and 4 into a single file. This way, in any single file, the maximum size you had to put is 3. You can't do better than this.

Test case 2. This time, you can have two files per load job. The first load job can have two files, the first one containing event 1, the second containing event 2. Similarly, you can do for the second load job. You can see that each event will go to a single file. Thus, the maximum size you had to put is 2.

Test case 4. Each event is to be written to its separate table. The total number of load jobs allowed is 4. In each load job, we will take a single event and write to a particular table. Thus, the maximum file size in any load job would be 2. 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
---
{"category_name":"school","problem_code":"WALKFAST","problem_name":"Train or Walk","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/rQEbeDgxHFI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"teja349","problem_tester":"","date_added":"30-11-2019","tags":{"0":"teja349"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/WALKFAST","time":{"view_start_date":1575801000,"submit_start_date":1575801000,"visible_start_date":1575801000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WALKFAST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chefland has all the cities on a straight line. There are $N$ cities in Chefland numbered $1$ to $N$. City $i$ is located at coordinate $x_i$ on the x-axis. Guru wants to travel from city $A$ to city $B$. He starts at time t=0. He has following choices to travel.

1. He can walk $1$ metre in $P$ secs.
2. There is a train that travels from city $C$ to city $D$ which travels $1$ metre in $Q$ secs which starts at time t=$Y$ secs. Guru can take the train only at city $C$ and leave the train only at city $D$.

Can you help Guru find the minimum time he will need to travel from city $A$ to $B$. Note that you cannot board the train after time t =$Y$.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- First line of each testcase contains eight space separated integers $N, A, B, C, D, P, Q, Y $. 
- Second line of each testcase contains $N$ space-separated integers with the $i$-th integer representing $x_i$.

###Output:
For each testcase, output in a single line containing the minimum travel time.

###Constraints 
- $1 \leq T \leq 300$
- $2 \leq N \leq 300$
- $-1000 \leq x_i \leq 1000$
- $0 \leq Y \leq 100000$
- $1 \leq A,B,C,D \leq n $
- $A \neq B$
- $C \neq D$
- $1 \leq P, Q \leq 100$
- $x_i < x_j$  if $i < j$


###Sample Input:
1

4 1 3 2 4 3 2 4

1 2 3 4

###Sample Output:
6

###EXPLANATION:
Guru can walk directly in 6 secs.

If Guru takes train, then he will need  atleast 11 secs.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
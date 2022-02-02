---
{"category_name":"easy","problem_code":"CHILLS","problem_name":"Chef and Hills","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 1\r\n1 2 3\r\n1 5\r\n1\r\n2 2\r\n1 5","output":"2\r\n2\r\n5","explanation":"**TestCase 1:** Optimal solution includes creating hill at $2$. Its distance from the house at coordinate $1$ is $1$, and so is its distance from the house at coordinate $3$. Its distance from the house at coordinate $2$ is $0$. Thus, total distance is $1+0+1=2$.\r\n\r\n**TestCase 2:** Optimal solution includes creating hills at $\\{-1, 0, 1, 2, 3 \\}$. The farthest hills from the house at coordinate $1$ are at coordinates $-1$ and $3$. The citizen can choose to travel to any of them, and the distance shall be $2$.\r\n\r\n**TestCase 3:** Optimal solution includes creating hills at $\\{1, 2 \\}$ or $\\{4, 5 \\}$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Yxhx2Tr1SKA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"smit_adm","problem_tester":"","date_added":"28-12-2020","tags":{"0":"easy","1":"greedy","2":"observation","3":"smit_adm","4":"start3","5":"vichitr"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHILLS","time":{"view_start_date":1619357400,"submit_start_date":1619357400,"visible_start_date":1619357400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHILLS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chefland is a $1D$ city where each of the $N$ houses is located at a distinct **positive integer** coordinate $A_1, A_2, \ldots A_N$. The chef is planning to create $K$ hills in the city. Note that two hills cannot be present at the same location but the location of hills and houses can overlap and each hill will also be at any **integer (positive, negative or zero)** coordinate. 

Each citizen would want to travel to the farthest hill from his house. Travelling will create air pollution and Chef wants to minimise the total pollution in the city. Help Chef find the minimum sum of distance travelled by everyone. In other words, help Chef create the hills at optimal locations, so that the sum of the distance of every house to the hill farthest from it is minimum possible.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains two lines of input.
- First line contains $2$ integers $N, K$ separated by a space.
- Second line contains $N$ integers $A_1, A_2, \ldots, A_N$, representing the location of the houses. 

###Output:
For each testcase, find the minimum possible sum of distances if Chef creates the hills at optimal locations, in a separate line.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N, K \leq 10^5$
- $1 \leq A_i \leq 10^9$
- $A_i \lt A_{i + 1} \forall$ valid $i$

###Sample Input:
```
3
3 1
1 2 3
1 5
1
2 2
1 5
```

###Sample Output:
```
2
2
5
```
	
###Explanation:
**TestCase 1:** Optimal solution includes creating hill at $2$. Its distance from the house at coordinate $1$ is $1$, and so is its distance from the house at coordinate $3$. Its distance from the house at coordinate $2$ is $0$. Thus, total distance is $1+0+1=2$.

**TestCase 2:** Optimal solution includes creating hills at $\{-1, 0, 1, 2, 3 \}$. The farthest hills from the house at coordinate $1$ are at coordinates $-1$ and $3$. The citizen can choose to travel to any of them, and the distance shall be $2$.

**TestCase 3:** Optimal solution includes creating hills at $\{1, 2 \}$ or $\{4, 5 \}$. 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
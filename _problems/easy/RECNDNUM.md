---
{"category_name":"easy","problem_code":"RECNDNUM","problem_name":"Chef and Walk","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"31-12-2019","tags":{"0":"easy","1":"maths","2":"rc122020","3":"rishup_nitdgp","4":"rishup_nitdgp","5":"sachin_yadav"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RECNDNUM","time":{"view_start_date":1588010400,"submit_start_date":1588010400,"visible_start_date":1588010400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RECNDNUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef is playing a game on the **non-negative** x-axis. It takes him $1$ second to reach from $i^{th}$ position to $(i-1)^{th}$ position or $(i+1)^{th}$ position. The chef never goes to the negative x-axis. Also, Chef doesn't stop at any moment of time.

The movement of chef can be described as follows.
- At the start he is standing at $x=0$ at time $0$.
- In the first round, he moves towards $x=1$ and comes back to the $x=0$ position. 
- In the second round, he moves towards the $x=2$ and comes back again to $x=0$. 
- Generalizing, in the $k^{th}$ round, he moves from $x=0$ to $x=k$ and then returns back to $x=0$ at the end of the round. This goes on as the game progresses.

For Example, the path of Chef for $3^{rd}$ round is given below.   
$0 - 1 - 2 - 3 - 2 - 1 - 0$        
  
The overall path followed by Chef would look somewhat like this:   
$0 - 1 - 0 - 1 - 2 - 1 - 0 - 1 - 2 - 3 - 2 - 1 - 0 - 1 - 2 - 3 - 4 - 3 - …$

You are given two **non-negative** integers $N$ and $K$. You have to tell **the time** at which Chef arrives at $x=N$ for the $K^{th}$ time. 

**Note - Chef can not skip a position while visiting the positions.**

###Input:
- The first line contains $T$ the number of test cases. Then the test cases follow.
- Each test case contains a single line of two integers $N$ and $K$.

###Output:
For each test case, print a single line containing one integer -- the time taken by the chef to arrive at $x=N$ for the $K^{th}$ time by modulo $1,000,000,007$.

###Constraints 
- $1 \le T \le 10^5$
- $0 \le N \le 10^9$
- $1 \le K \le 10^9$

###Sample Input:
```
5
0 1
1 1
2 1
1 3
4 6
```

###Sample Output:
```
0
1
4
5
46
```

### Explanation:
**Test Case 1:**  
Chef starts the journey from the $N = 0$ at time $t = 0$ and it's the first time $(K = 1)$, he is here. So, the answer is $0$.  

**Test Case 2:**  
Chef starts the journey from the $N = 0$ at time $t = 0$ then goes to $N = 1$ at $t = 1$ and it's the first time $(K = 1)$, he is here. So, the answer is $1$.

**Test Case 4:**   
The path followed by Chef to reach $1$ for the third time is given below.   
$0 - 1 - 0 - 1 - 2 - 1$   
He reaches $1$ for the third time at $t=5$.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
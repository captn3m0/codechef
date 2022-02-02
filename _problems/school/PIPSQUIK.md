---
{"category_name":"school","problem_code":"PIPSQUIK","problem_name":"Full Barrier Alchemist","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/Bg-V6pFQvrg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sachin_yadav","problem_tester":"","date_added":"19-10-2019","tags":{"0":"cakewalk","1":"dcod2019","2":"sachin_yadav"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PIPSQUIK","time":{"view_start_date":1572633000,"submit_start_date":1572633000,"visible_start_date":1572633000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PIPSQUIK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Edward Elric is chasing after Scar. To stop Edward, Scar creates $N$ barriers in the way, numbered from $1$ to $N$. 
Each barrier Scar created is either one of the following two types.
- Type 1 barrier - This barrier starts from a height $X$ above the ground and extends till the sky.
- Type 2 barrier - This barrier starts from the ground and extends up to height $X$ above the ground.

![](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/DCOD2019/problem1.png =500x500)

The height of Edward is $H$ units and he has an alchemic life force of $L$ units. Moreover, he can duck by $Y_{1}$ units and jump by height $Y_{2}$ units (as explained in the figures). He starts crossing barriers in sequence, starting from barrier $1$ till the barrier $N$. Whenever he can't pass a barrier by ducking or jumping (considered passed even when the barrier just touches him), he uses Alchemy to break the barrier. However, this costs him a single unit of his alchemic life force.

If after breaking a barrier no life force is left, Edward gets completely exhausted, unable to pass that barrier.   
How many barriers can Edward cross?   

And remember never to call him a pipsqueak if his height is too short!

             
### Input:

- The first line contains $T$, the number of test cases. Then the test cases follow. 
- For each test case, the first line contains five integers $N$, $H$, $Y_{1}$, $Y_{2}$ and $L$.
- The i-th of the next $N$ lines contains two integers $t_{i}$ and $X_{i}$ for the $i^{th}$ barrier where $t_{i} = 1$ denotes a Type 1 Barrier and $t_{i} = 2$ denotes a Type 2 barrier.
  
### Output:
For each test case print a single line containing the number of barriers Edward can pass.
  
### Constraints 
- $1 \leq T\leq 100$   
- $1 \leq N\leq 10^{3}$    
- $2 \leq H\leq 10^{3}$   
- $1 \leq Y_{1} < H$   
- $1 \leq Y_{2} \leq 10^{3}$    
- $1 \leq L \leq N$    
- $1 \leq t_{i} \leq 2$
- $1 \leq X_{i}\leq 10^{3}$ 
  
### Sample Input:
```
3
6 5 1 2 3
2 2
2 1
1 10
2 8
2 4
1 2
1 4 2 5 1
2 6
6 5 1 2 3
2 2
2 1
1 10
2 8
2 4
1 6
```

### Sample Output:
```
5
0
6
```
### Explanation:     
**Test Case 1:**    

Given $N = 6$, $H = 5$, $Y_{1} = 1$, $Y_{2} = 2$ and $L = 3$.    
He passes the first three barriers by either ducking or jumping. He uses alchemic life force for breaking $4^{th}$, $5^{th}$ and $6^{th}$ barriers because he cannot pass them by either jumping or ducking. He gets exhausted after breaking the $6^{th}$ barrier and is unable to pass it. So, in total he passes $5$ barriers.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
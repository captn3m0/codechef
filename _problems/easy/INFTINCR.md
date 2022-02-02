---
{"category_name":"easy","problem_code":"INFTINCR","problem_name":"Infinite Increments","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hackslash_123","problem_tester":null,"date_added":"20-08-2019","tags":{"0":"cnmp2019","1":"easy","2":"hackslash_123","3":"observation","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/INFTINCR","time":{"view_start_date":1573313400,"submit_start_date":1573313400,"visible_start_date":1573313400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=INFTINCR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef has a garden with $N$ plants arranged in a line in decreasing order of height. Initially the height of the plants are $A_1, A_2, ..., A_N$.

The plants are growing, after each hour the height of the $i$-th plant increases by $i$ millimeters. Find the minimum number of integer hours that Chef must wait to have two plants of the same height.

###Input:

- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space separated integers $A_1,A_2,..A_N$. 

###Output:
For each test case print a single line containing one integer, the minimum number of integer hours that Chef must wait to have two plants of the same height.

###Constraints 
- $1 \leq T \leq 1000$
- $2 \leq N \leq 10^5$
- $0\leq A_i \leq 10^{18}$
- $A_i >A_{i+1}$, for each valid $i$
- The Sum of $N$ over all test cases does not exceed $10^6$


###Sample Input:
```
1
3
8 4 2
```

###Sample Output:
```
2
```

###EXPLANATION:
After $2$ hours there are two plants with the same height. 
$[8,4,2] \rightarrow [9,6,5] \rightarrow [10,8,8]$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
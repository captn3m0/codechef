---
{"category_name":"school","problem_code":"RECNDNOS","problem_name":"Chef and Numbers","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"21-04-2020","tags":{"0":"cakewalk","1":"hashing","2":"rc122020","3":"rishup_nitdgp","4":"rishup_nitdgp","5":"sachin_yadav"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RECNDNOS","time":{"view_start_date":1588010400,"submit_start_date":1588010400,"visible_start_date":1588010400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RECNDNOS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef has $N$ dishes of different types arranged in a row: $A_1, A_2, \ldots, A_N$, where $A_i$ denotes the type of the $i^{th}$ dish. He wants to choose as many dishes as possible from the given list but while satisfying two conditions: 

1.  He can choose **only one** type of dish.   
2.  No two chosen dishes should be adjacent to each other. 

Chef wants to know which type of dish he should choose from, so that he can pick the maximum number of dishes.

**Example:**      
Given $N$=$9$ and $A$=$[1, 2, 2, 1, 2, 1, 1, 1, 1]$.   
For **type 1**, Chef can choose at most four dishes. One of the ways to choose four dishes of type 1 is $A_1$, $A_4$, $A_7$ and $A_9$.   
For **type 2**, Chef can choose at most two dishes. One way is to choose $A_3$ and $A_5$.  
So in this case, Chef should go for **type 1**, in which he can pick more dishes.

###Input:
- The first line contains $T$, the number of test cases. Then the test cases follow.
- For each test case, the first line contains a single integer $N$.
- The second line contains $N$ integers $A_1, A_2, \ldots, A_N$. 

###Output:    
For each test case, print a single line containing one integer ― the **type** of the dish that Chef should choose from. If there are multiple answers, print the **smallest** one.

###Constraints   
- $1 \le T \le 10^3$
- $1 \le N \le 10^3$
- $1 \le A_i \le 10^3$
- Sum of $N$ over all test cases doesn't exceed $10^4$

###Sample Input:
```
3
5
1 2 2 1 2
6
1 1 1 1 1 1
8
1 2 2 2 3 4 2 1
```

###Sample Output:
```
1
1
2
```

### Explanation:

**Test case 1:**   
For both **type 1** and **type 2**, Chef can pick at most two dishes. In the case of multiple answers, we pick the smallest one. Hence the answer will be $1$.

**Test case 2:**   
There are only dishes of **type 1**. So the answer is $1$.

**Test case 3:**   
For **type 1**, Chef can choose at most two dishes. For **type 2**, he can choose three dishes. For **type 3** and **type 4**, Chef can choose the only dish available. Hence the maximum is in **type 2** and so the answer is $2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
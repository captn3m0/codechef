---
{"category_name":"medium","problem_code":"TRECYB","problem_name":"Cybertree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hackcyborg","problem_tester":"","date_added":"16-12-2020","tags":{"0":"bytr2020","1":"hackcyborg","2":"medium"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TRECYB","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRECYB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Let $A$ be an array of $N$ elements and let us define beauty of array as (consider 1 based indexing)

```
long long int beauty(int N, int A[]){
     long long int val = 0;
     for(int i = 1; i < N; i++){
           for(int j = i + 1; j <= N; j++){
                 if(a[i] < a[j]){val++;}
                 else{val--;}
           }
     }
     return val;
}
```
Let $G$ be a tree with $N$ nodes numbered from $1$ to $N$ rooted at node $1$. Find the Expected Beauty of all the valid $BFS(Breadth First Search)$ of $G$.
Expected beauty of a $BFS$ can be calculated using above function considering visiting order as elements of the array.

###Input:

- First line will contain $N$, the number of nodes. 
- This will be followed by $N - 1$ lines each containing two space-separated integers $a$, $b$ denoting that their is an edge between nodes $a$ and $b$.

###Output:

- On a single line, print a real number, the answer to the problem. Your answer will be considered correct if its absolute or relative error does not exceed ${10}^{-6}$. Formally, if your answer is $a$ and the jury's answer is $b$, your answer will be accepted if $\frac{|a-b|}{max(1,b)} \leq {10}^{-6}$.

###Constraints:
- $1 \leq N \leq 2 * 10^5$

###Sample Input
```
3
1 2
1 3
```

###Expected Output
2.000000

###Explanation:
Valid BFSs are 1 2 3 — beauty = $3$; and 1 3 2 — beauty = $1$.

So, Expected Beauty is equal to $\frac{1}{2} * 3 + \frac{1}{2} * 1 = 2.000$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
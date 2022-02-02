---
{"category_name":"school","problem_code":"CACHEHIT","problem_name":"Cache Hits","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5 3 3\r\n0 3 4","output":2,"explanation":"**Example case 1:** The machine stores elements $[A_0, A_1, A_2]$ in one block and $[A_3, A_4]$ in another block. When accessing $A_0$, the block $[A_0, A_1, A_2]$ is loaded. Then, accessing $A_3$ removes the previous block from the cache and loads the block $[A_3, A_4]$. Finally, when Chef accesses $A_4$, a new block is not loaded, since the block containing $A_4$ is currently loaded in the cache.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/EbGxgxu7l2k","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rezwanarefin01","problem_tester":"","date_added":"13-06-2020","tags":{"0":"cakewalk","1":"cook119","2":"math","3":"rezwanarefin01","4":"taran_1407"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CACHEHIT","time":{"view_start_date":1592764202,"submit_start_date":1592764202,"visible_start_date":1592764202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CACHEHIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK119/hindi/CACHEHIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK119/mandarin/CACHEHIT.pdf), [Russian](https://www.codechef.com/download/translated/COOK119/russian/CACHEHIT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK119/vietnamese/CACHEHIT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK119/bengali/CACHEHIT.pdf) as well.

Chef has a memory machine. It has one layer for data storage and another layer for cache. Chef has stored an array with length $N$ in the first layer; let's denote its elements by $A_0, A_1, \ldots, A_{N-1}$. Now he wants to load some elements of this array into the cache.

The machine loads the array in blocks with size $B$: $A_0, A_1, \ldots, A_{B-1}$ form a block, $A_B, A_{B+1}, \ldots, A_{2B-1}$ form another block, and so on. The last block may contain less than $B$ elements of Chef's array. The cache may only contain at most one block at a time. Whenever Chef tries to access an element $A_i$, the machine checks if the block where $A_i$ is located is already in the cache, and if it is not, loads this block into the cache layer, so that it can quickly access any data in it. However, as soon as Chef tries to access any element that is outside the block currently loaded in the cache, the block that was previously loaded into the cache is removed from the cache, since the machine loads a new block containing the element that is being accessed.

Chef has a sequence of elements $A_{x_1}, A_{x_2}, \ldots, A_{x_M}$ which he wants to access, in this order. Initially, the cache is empty. Chef is wondering how many times the machine will need to load a block into the cache layer. Can you help him calculate this number?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $B$ and $M$.
- The second line contains $M$ space-separated integers $x_1, x_2, \ldots, x_M$.

### Output
For each test case, print a single line containing one integer ― the number of times the machine loads a block into the cache.

### Constraints
- $1 \le T \le 100$
- $1 \le N, B, M \le 5,000$
- $0 \le x_i \lt N$ for each valid $i$

### Example Input
```
1
5 3 3
0 3 4
```

### Example Output
```
2
```

### Explanation
**Example case 1:** The machine stores elements $[A_0, A_1, A_2]$ in one block and $[A_3, A_4]$ in another block. When accessing $A_0$, the block $[A_0, A_1, A_2]$ is loaded. Then, accessing $A_3$ removes the previous block from the cache and loads the block $[A_3, A_4]$. Finally, when Chef accesses $A_4$, a new block is not loaded, since the block containing $A_4$ is currently loaded in the cache.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
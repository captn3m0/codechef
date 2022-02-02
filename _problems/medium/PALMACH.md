---
{"category_name":"medium","problem_code":"PALMACH","problem_name":"Palindromes Machine","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4 2\r\naaaa\r\nabcb\r\nabcb\r\nbcba","output":5,"explanation":"**Example case 1:** Hasan can choose the following sequences of indices:\r\n- $(1)$: the input of the machine is (\u0022aaaa\u0022) and the generated string $B$ is \u0022aaaa\u0022\r\n- $(2, 4)$: the input is (\u0022abcb\u0022, \u0022bcba\u0022) and $B$ is \u0022abbccbba\u0022\r\n- $(3, 4)$: the input is (\u0022abcb\u0022, \u0022bcba\u0022) and $B$ is \u0022abbccbba\u0022\r\n- $(4, 2)$: the input is (\u0022bcba\u0022, \u0022abcb\u0022) and $B$ is \u0022bacbbcab\u0022\r\n- $(4, 3)$: the input is (\u0022bcba\u0022, \u0022abcb\u0022) and $B$ is \u0022bacbbcab\u0022","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"i_love_islam","problem_tester":null,"date_added":"18-09-2019","tags":{"0":"combinatorics","1":"cook110","2":"dynamic","3":"fast","4":"i_love_islam","5":"medium","6":"taran_1407"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/PALMACH","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PALMACH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Dr. Hasan is one of the most famous inventors in the world. One day, he invented a wonderful machine in order to examine the possibility of generating new palindrome strings by merging other strings.

Hasan's machine takes a sequence of strings $(A_1, A_2, \ldots, A_K)$ as the input; $K$ may be any positive integer. The length of each of these strings must be exactly $N$; for each valid $j$, let's denote the $j$-th character of the $i$-th string by $A_{i, j}$. The machine magically generates a string $B$ by merging these strings and it determines if $B$ is a palindrome. The string $B$ is generated as follows:
- $B_1 = A_{1, 1}, B_2 = A_{2, 1}, \ldots, B_K = A_{K, 1}$
- $B_{K+1} = A_{1, 2}, B_{K+2} = A_{2, 2}, \ldots, B_{2 \cdot K} = A_{K, 2}$
- ...
- $B_{(N-1) \cdot K + 1} = A_{1, N}, B_{(N-1) \cdot K + 2} = A_{2, N}, \ldots, B_{N \cdot K} = A_{K, N}$

Hasan wants to test his new machine, so he prepared $N$ strings $S_1, S_2, \ldots, S_N$. Each of these strings has length $N$. Now, he wants to choose a sequence of $K$ pairwise distinct indices $i_1, i_2, \ldots, i_K$, where $1 \le K \le M$, and run the machine with strings $(S_{i_1}, S_{i_2}, \ldots, S_{i_K})$. His goal is to make the machine report that the string it generated is a palindrome.

Can you help Hasan with testing his machine and tell him the number of sequences of indices he can choose? Since the answer could be very large, compute it modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and  $M$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a single string $S_i$.

### Output
For each test case, print a single line containing one integer — the number of sequences Hasan can choose, modulo $10^9+7$.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^3$
- $1 \le M \le N$
- $|S_i| = N$ for each valid $i$
- $S_1, S_2, \ldots, S_N$ contain only lowercase English letters
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^3$

### Example Input
```
1
4 2
aaaa
abcb
abcb
bcba
```

### Example Output
```
5
```

### Explanation
**Example case 1:** Hasan can choose the following sequences of indices:
- $(1)$: the input of the machine is ("aaaa") and the generated string $B$ is "aaaa"
- $(2, 4)$: the input is ("abcb", "bcba") and $B$ is "abbccbba"
- $(3, 4)$: the input is ("abcb", "bcba") and $B$ is "abbccbba"
- $(4, 2)$: the input is ("bcba", "abcb") and $B$ is "bacbbcab"
- $(4, 3)$: the input is ("bcba", "abcb") and $B$ is "bacbbcab"

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
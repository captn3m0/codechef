---
{"category_name":"medium","problem_code":"CUPACO","problem_name":"Cumulative Palindrome Count","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mcdic","problem_tester":null,"date_added":"18-12-2019","tags":{"0":"combinatorics","1":"math","2":"mcdic","3":"plit2020"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CUPACO","time":{"view_start_date":1578942000,"submit_start_date":1578942000,"visible_start_date":1578942000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CUPACO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Gru has been ordering the minions to do a lot of work lately. Minions don't want to trust Gru anymore. So, they propose a problem to Gru. They will only help Gru if he can answer the problem correctly. The minions  generate an endless string $s$ by following these steps:

1. Let $s$ be an empty string.
2. $i = 1$.
3. Append $i$ *a* s to the back of $s$.
4. Append $i$ *b* s to the back of $s$.
5. Multiply $i$ by $2$ and go back to the third step.

So $s$ will be *abaabbaaaabbbb...*. Now let's define $f(x)$ as number of distinct palindrome substring segments in $s[1 \ldots x]$. For example, $f(3) = 4$ because *a* (which is $s[1 \ldots 1]$), *b* (which is $s[2 \ldots 2]$), *a* (which is $s[3 \ldots 3]$) and *aba* (which is $s[1 \ldots 3]$) are possible palindrome substrings of $s[1 \ldots 3]$.

The minions will give an integer $N$. Help Gru calculate ($\sum_{i=1}^{N} f(i)) \bmod{({10}^9 + 7)}$.

Note: We are using 1-indexing.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains a single line of input, which has one integer, $N$. 

###Output:

For each testcase, output in a single line, the answer modulo $({10}^9 + 7)$.

###Constraints 

- $1 \leq T \leq 10^3$
- $1 \leq N \leq 10^{18}$

###Sample Input:
	1
	3

###Sample Output:
	7
	
###EXPLANATION:
$f(1) = 1$, $f(2) = 2$, $f(3) = 4$. And so, the answer for $N = 3$ is $1+2+4 = 7$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
---
{"category_name":"easy","problem_code":"KMXOR","problem_name":"Best Cake Ever","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hloya_ygrt","problem_tester":null,"date_added":"15-05-2018","tags":{"0":"constructive","1":"cook94","2":"hloya_ygrt","3":"xor"},"editorial_url":"https://discuss.codechef.com/problems/KMXOR","time":{"view_start_date":1526841000,"submit_start_date":1526841000,"visible_start_date":1526841000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK94/mandarin/KMXOR.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK94/russian/KMXOR.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK94/vietnamese/KMXOR.pdf" target="_blank">Vietnamese</a> as well.</h3>


Chef is baking a large cake! The cake consists of $N$ different ingredients numbered $1$ through $N$. Chef can choose how much of each ingredient to use in his cake recipe; let's denote the amount of the $i$-th ingredient used in the cake by $g_i$. Chef can only measure ingredients in fixed whole units, so the amounts of all ingredients must be integers.

In order to keep the cake inexpensive (and, of course, use each ingredient from the recipe), the chosen amounts of ingredients have to satisfy the condition $1 \le g_i \le K$ (for each $1 \le i \le N$). The *taste* of the resulting cake is computed as the bitwise XOR of the amounts of all ingredients, i.e. $g_1 \oplus g_2 \oplus \dots \oplus g_N$. For example, if $N=3$ and $g = [1, 2, 5]$, the taste of the cake is equal to $1 \oplus 2 \oplus 5 = 6$.

Please help Chef and find one way to choose the amounts of all ingredients such that the taste of the cake is maximum possible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $K$. 

### Output
For each test case, print a single line containing $N$ space-separated integers $g_1, g_2, \dots, g_N$ — the amounts of ingredients $1, 2, \dots, N$.

### Constraints 
- $1 \le T \le 40$
- $1 \le N \le 10^4$
- $1 \le K \le 10^9$

### Example Input
```
2
3 5
4 3
```

### Example Output
```
5 1 3
1 2 3 3
```

### Explanation
**Example case 1:** The maximum possible taste of the cake is $5 \oplus 1 \oplus 3 = 7$.

**Example case 2:** The maximum possible taste is $1 \oplus 2 \oplus 3 \oplus 3 = 3$.

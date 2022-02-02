---
{"category_name":"school","problem_code":"CLFIBD","problem_name":"Fibonacci String","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"avijit_agarwal","problem_tester":null,"date_added":"31-03-2018","tags":{"0":"avijit_agarwal","1":"cakewalk","2":"cole2018","3":"string"},"editorial_url":"https://discuss.codechef.com/problems/CLFIBD","time":{"view_start_date":1524062940,"submit_start_date":1524062940,"visible_start_date":1524062940,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>  

For a string $S$ let the unique set of characters that occur in it one or more times be $C$. Consider a permutation of the elements of $C$ as $(c_1, c_2, c_3 ... )$. Let $f(c)$ be the number of times $c$ occurs in $S$.

If any such permutation of the elements of $C$ satisfies $f(c_i) = f(c_{i-1}) + f(c_{i-2})$ for all $i \ge 3$, the string is said to be a **dynamic string**.

Mr Bancroft is given the task to check if the string is dynamic, but he is busy playing with sandpaper. Would you help him in such a state?

Note that if the number of distinct characters in the string is less than 3, i.e. if $|C| < 3$, then the string is always dynamic.

###Input:
- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, a string $S$.

###Output:
For each testcase, output in a single line "**Dynamic**" if the given string is dynamic, otherwise print "**Not**". (Note that the judge is case sensitive)

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq |S| \leq 10^5$
- $S$ contains only lower case alphabets: $a$, $b$, ..., $z$

###Sample Input:
    3
    aaaabccc
    aabbcc
    ppppmmnnoooopp

###Sample Output:
    Dynamic
    Not
    Dynamic

###Explanation:
- **Testase 1:** For the given string, $C = \{a, b, c\}$ and $f(a)=4, f(b)=1, f(c)=3$. $f(a) = f(c) + f(b)$ so the permutation $(b, c, a)$ satisfies the requirement.
- **Testcase 2:** Here too $C = \{a, b, c\}$ but no permutation satisfies the requirement of a dynamic string.
- **Testcase 3:** Here $C = \{m, n, o, p\}$ and $(m, n, o, p)$ is a permutation that makes it a dynamic string.

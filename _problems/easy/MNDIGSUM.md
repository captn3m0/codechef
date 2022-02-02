---
{"category_name":"easy","problem_code":"MNDIGSUM","problem_name":"Minimize Digit Sum","problemComponents":{"constraints":"\n- $1 \\leq Q \\leq 10^3$\n- $2 \\leq n \\leq 10^9$\n- $2 \\leq l \\leq r \\leq 10^9$","constraintsState":true,"subtasks":"**Subtask #1 (50 points):** original constraints\n\n*This problem is worth a total of 50 points and is meant to be complementary to the problem \u0022MNDIGSM2\u0022 (also worth 50 points) which is very similar to this problem, but has slightly different constraints.*","subtasksState":true,"inputFormat":"\n- The first line contains in single integer $Q$, the number of queries\n- Each of the next Q lines contain three space separated integers $n, l$ and $r$ respectively.\n","inputFormatState":true,"outputFormat":"\n- For each query (`n l r`), print the value of base $B$ which lies within $[l, r]$ such that $f(n, B)$ is minimum.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n216 2 7\n256 2 4\n31 3 5","output":"6\n2\n5","explanation":"To compute $f(n, B)$, first write the integer $n$ in the form $a_0 + a_1 B + a_2 B^2 + \\dots $ such that $0 \\leq a_i \u003C B$ and $a_i$ is an integer. It can be shown that such a representation is unique. The sum of the digits is then $\\sum\\limits_{i=0}^{\\infty} a_i$ (to be computed in base 10).\n\nFor example to compute $f(216, 2)$, observe that $216 = 2^7 + 2^6 + 2^4 + 2^3$, and so the sum of digits is $1 + 1 + 1 + 1 = 4$.\nSimilarly, to compute  $f(216, 100)$, write $216$ as $2 * 100 + 16$ and so the sum of digits is $2 + 16 = 18$.\n\n**Test case $1$:** We have $f(216, 2) = f(216, 3) = 4$, $f(216, 4) = 6$, $f(216, 5) = 8$, $f(216, 6) = 1$ and finally $f(216, 7) = 12$. Clearly the minimum is obtained when $B = 6$.\n\n**Test case $2$:** Note that $f(256, 2) = f(256, 4)$ = $1$, therefore both the answers $2$ and $4$ will be considered correct.\n\n**Test case $3$:** $f(31, 3) = f(31, 5) = 3$ and $f(31, 4) = 7$, therefore both the answers $3$ and $5$ will be considered correct.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/wPpODH7tu6Q","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"srikkanth_adm","problem_tester":"","date_added":"25-08-2021","tags":{"0":"easy","1":"math","2":"sept21","3":"srikkanth_adm"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MNDIGSUM","time":{"view_start_date":1631525400,"submit_start_date":1631525400,"visible_start_date":1631525400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MNDIGSUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/SEPT21/bengali/MNDIGSUM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT21/mandarin/MNDIGSUM.pdf), [Russian](https://www.codechef.com/download/translated/SEPT21/russian/MNDIGSUM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT21/vietnamese/MNDIGSUM.pdf) as well.

Let $f(n, B)$ be the sum of digits of the integer $n$ when written in base $B$.

More formally, if $n = \sum\limits_{i=0}^{\infty} a_i B^i$ where $a_i$ is an integer in the range $[0, B-1]$, then $f(n, B) = \sum\limits_{i=0}^{\infty} a_i$.

Given $Q$ queries, each consisting of three integers $n, l$ and $r$. Find the value of $B$ corresponding to which $f(n, B)$ is minimum for all $l \leq B \leq r$. If there are multiple such values, you can print any of them.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
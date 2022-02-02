---
{"category_name":"easy","problem_code":"CLSPWR","problem_name":"Closest Power","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^5$\n- $1 \\leq n \\leq 10^{18}$","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- The first line of input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.\n- The first and only line of each test case contains a single integer $n$.","inputFormatState":true,"outputFormat":"For each test case, print in a separate line, the smallest $x$ such that $x$ is a perfect power and $|n - x|$ is minimum.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"7\n7\n10\n26\n242\n129\n394857629456789876\n353872815358409997","output":"8\n9\n25\n243\n128\n394857628993920400\n353872815358410000","explanation":"**Test case $1$:** $n = 7$, $8 = 2^3$ is a perfect power, but $6$ is not, so the minimum difference obtainable is $1$ when $x = 8$.\n\n**Test case $2$:** $n = 10$, $9 = 3^2$ is a perfect power, but $11$ is not, so the minimum difference obtainable is $1$ when $x = 9$.\n\n**Test case $3$:** $n = 26$, $25 = 5^2$ is a perfect power, $27 = 3^3$ is also a perfect power. Both $x = 25$ and $x = 27$ give the minimum difference obtainable which is $1$. The smallest of them is $25$.\n\n**Test case $4$:** $n = 242$, $243 = 3^5$ is a perfect power but $241$ is not, so the answer is $243$.\n\n**Test case $5$:** $128 = 2^7$ is closest to $129$.\n\n**Test case $6$:** $394857628993920400 = 628376980^2$ is the closest to $394857629456789876$.\n\n**Test case $7$:** $353872815358410000 = 24390^4$ is the closest to $353872815358409997$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/ng-6y7ZSm3M","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"srikkanth_adm","problem_tester":"","date_added":"27-06-2021","tags":{"0":"math","1":"srikkanth_adm","2":"start8"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CLSPWR","time":{"view_start_date":1629124200,"submit_start_date":1629124200,"visible_start_date":1629124200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CLSPWR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/START8/russian/CLSPWR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START8/mandarin/CLSPWR.pdf), [Bengali](https://www.codechef.com/download/translated/START8/bengali/CLSPWR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START8/vietnamese/CLSPWR.pdf) as well.

An integer $x$ is said to be a **Perfect Power** if there exists **positive** integers $a$ and $b$ (i.e $a$, and $b$ should be $\geq 1$) such that $x = a^{b+1}$.

Given an integer $n$, find the closest Perfect Power to $n$. If there are multiple *Perfect Powers* equidistant from $n$ and as close as possible to $n$, find the smallest one.

More formally, find the smallest integer $x$ such that $x$ is a Perfect Power and $|n - x| \leq |n - y|$ over all Perfect Powers $y$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>
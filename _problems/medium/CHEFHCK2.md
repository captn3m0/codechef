---
{"category_name":"medium","problem_code":"CHEFHCK2","problem_name":"End Of The World 2","languages_supported":{"0":"C","1":"CPP 4.9.2","2":"CPP14","3":"JAVA"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"anton_lunyov","problem_tester":"laycurse","date_added":"7-02-2013","tags":{"0":"anton_lunyov","1":"binary","2":"cook31","3":"easy"},"editorial_url":"http://discuss.codechef.com/problems/CHEFHCK2","time":{"view_start_date":1361126637,"submit_start_date":1361126637,"visible_start_date":1361126539,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><b>Important!!! Humans are in Danger... It may be The End of the Universe!!! Again...</b></p>
<p><b>Aliens</b> again had stolen the important data about the <b>Birth of the Human beings</b> and as before they keep this data in their secured <b>Data Center</b>. With the help of these data along with the advanced technologies Aliens had initiated a project called <b>It's The End</b> to get rid of the human beings and occupy the Earth.</p>
<p>"Stupid humans! How could they allow this again?!" <b>Chef Po</b> has thought and started connecting to the Aliens Data Center to save the Earth again.</p>
<p>The first thing he noticed is that there are <b>N</b> servers in the Aliens Data Center and they are arranged in a line. Aliens have rearranged the Data Center to avoid "Grid Hacking Mechanism" (refer to <a href="http://www.codechef.com/JAN13/problems/CHEFHACK">this</a>, but this is not needed to understand this problem). Denote the <b>i</b>-th server as <b>Server[i]</b> (<b>1</b> ≤ <b>i</b> ≤ <b>N</b>).</p>
<p>Aliens had divided the <b>Data File</b> with the data about the Birth of the Human beings into <b>N</b> parts denoted as <b>F[i]</b> (<b>1</b> ≤ <b>i</b> ≤ <b>N</b>) and placed the part <b>F[i]</b> at the <b>Server[i]</b>. Each server has a password - a non-negative integer. Chef Po needs to crack all the servers in order to get all parts of the <b>Data File</b>.</p>
<p>The Aliens are really strange beings, so they single out two types of passwords:</p>
<ul>
<li><b>Power Password</b> - a number of the form <b>A<sup>B</sup></b> (<b>A</b>, <b>B</b> ≥ <b>2</b>). The list of Power Passwords starts with <b>4, 8, 9, 16, 25, 27, 32, 36, 49, 64, 81, 100, ...</b></li>
<li><b>Non-Power Password</b> - any other number. This list starts with <b>0, 1, 2, 3, 5, 6, 7, 10, 11, 12, 13, 14, 15, 17, ...</b></li>
</ul>

<p>For simplicity we shall call server secured by a Power Password as Power Server and the server secured by a Non-Power Password as Non-Power Server.</p>
<p>All Non-Power Servers have a friendly screen with the color indicator. Suppose you enter a password trying to guess the actual password of such a server. The indicator will then become green if you enter a number which is smaller than the actual password; it will become red if your number is greater than the actual password, or you will get the access to the server (and, thus, to the needed part of the Data File) if the password is correct.</p>
<p>On the other hand, each Power Server has no such screen and the only way to crack it is to try all Power Passwords until you find out the correct password. So our Chef simply iterate over the list of Power Passwords in increasing order and try them until he finds the correct password.</p>
<p>After the last adventure with Aliens, Chef became smarter so he will use binary search to crack Non-Power Servers. Namely, let <b>A[1], A[2], A[3], A[4], ...</b> be the sequence of all Non-Power Passwords. At first he will try passwords <b>A[2], A[4], A[8], A[16], ...</b> until he either reaches the correct one or the indicator becomes red for the first time. If indicator becomes red at the password <b>A[2] = 1</b> then he enters <b>A[1] = 0</b> at the next step and cracks the server (since <b>0</b> is the only Non-Power Password less than <b>1</b>). Let the indicator becomes red at the password <b>A[2<sup>k</sup>]</b> where <b>k ≥ 2</b> while for the password <b>A[2<sup>k−1</sup>]</b> indicator was green. Then Chef sets <b>L = 2<sup>k−1</sup></b>, <b>R = 2<sup>k</sup></b> and uses usual binary search to crack the server after that. Namely, at each step he sets <b>M = (L + R) div 2</b> and checks the password <b>A[M]</b>. If it is correct he finishes the process; if indicator becomes green he sets <b>L = M</b> and continue the process; finally, if indicator becomes red he sets <b>R = M</b> and continue the process.</p>
<p>Let's consider some examples:</p>
<ul>
<li>Suppose the password is <b>9</b>. It's a Power Password, so Chef will not see the friendly screen which means for him that the server is a Power Server. Hence he will try the password <b>4</b>, then <b>8</b> and then <b>9</b>, making 3 tries in all.</li>
<li>Suppose the password is <b>0</b>. It's a Non-Power Password, so Chef will see the friendly screen which means for him that the server is a Non-Power Server. Hence he will try the passwords <b>A[2] = 1, A[1] = 0</b> in order, making 2 tries in all.</li>
<li>Suppose the password is <b>7</b>. It's a Non-Power Password. Hence he will try the passwords <b>A[2] = 1, A[4] = 3, A[8] = 10, A[6] = 6, A[7] = 7</b> in order, making 5 tries in all.</li>
<li>Suppose the password is <b>1</b>. It's a Non-Power Password. He will crack this server from the first try since <b>A[2] = 1</b>.</li>
</ul>

<p>You are the secret Aliens agent that got to know about Chef's plan. Your first goal is to estimate the time Chef will spend on cracking each server so that Aliens headquarters would know how much time they have to stop the Chef. Chef spent one second to enter each password.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of servers in the Aliens Data Center. The second line contains <b>N</b> space separated integers. The <b>i</b>-th number among them denotes the password at the <b>Server[i]</b>.</p>
<h3>Output</h3>
<p>Output a single line containing <b>N</b> space separated integers. The <b>i</b>-th number among them should equal to the number of tries Chef will use to crack the <b>Server[i]</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>314159</b></li>
<li><b>0</b> ≤ <b>each password</b> ≤ <b>3141<sup>5</sup></b></li>
<li>Chef Po does not know this bound on the password and assumes that password can be any non-negative integer when he is cracking</li></ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
6
9 0 7 1 314 100

<b>Output:</b>
3 2 5 1 15 12
</pre><h3>Explanation</h3>
<p>The cracking process of first 4 servers explained in the problem statement.</p>

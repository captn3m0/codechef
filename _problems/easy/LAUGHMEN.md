---
{"category_name":"easy","problem_code":"LAUGHMEN","problem_name":"A Few Laughing Men","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"24-12-2017","tags":{"0":"admin2"},"time":{"view_start_date":1517693400,"submit_start_date":1517693400,"visible_start_date":1517693400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Balaji is a great person to hang out with. He tells really <i>amazing</i> jokes, though sometimes he also slips some very <i>boring</i> ones in between. Today, he told <b>N</b> jokes to Arjun. We have this information in an array <b>J</b> of size <b>N</b> recorded and given to us by Vaibhav, where each entry can be either 1 or -1. 1 denotes that the joke was amazing, whereas -1 signifies the joke was boring and too poor to get even a forced smile from our nice Arjun.</p>

<p>Arjun being a sensible person, can distinguish amazing and boring jokes easily. He usually laughs only at amazing jokes. But today morning he had a session of laughter yoga, and he is very happy and elated. So, whenever he hears some amazing jokes, he laughs with strictly more intensity than the previous <i>amazing joke</i> that he heard. As usual, if you tell a boring joke, he won't care much about it and will respond arbitrarily. That is, you can't say anything about his laugh intensity. It could be anything. </p>

<p>Vaibhav was present during this laughing session. He recorded the events, but since he has not seen Arjun before, he is not sure if it was actually Arjun or someone else who was laughing. He has recorded the type of the <b>N</b> jokes in array <b>J</b>. Also, the laughter intensities were recorded in an array <b>L</b> of size <b>N</b> by an automated sophisticated equipment called the intensometer. The i<sup>th</sup> entry of this array denotes the intensity with which the person laughed at the i<sup>th</sup> joke. But we do not trust Vaibhav fully. Through our very trusted sources Animesh and Akashdeep, it came to light that Vaibhav might have slept for a short duration during the session. But we know that if at all he slept, he slept only for a short enough time and so he could only have miswritten the joke type of at most one joke. That is, he could have misclassified at most one amazing joke as a boring one, or vice-versa. As intensities are calculated using the intensometer, they have been recorded precisely and there are no errors in it.</p>

<p>So, given the array <b>J</b>, and the array <b>L</b>, we should identify whether the person laughing could have been Arjun or not. Note that Arjun could laugh at an amazing joke with intensity 0.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> cases follow.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of jokes Balaji told.</p>
<p>The second line of each test case contains <b>N</b> space separated integers denoting the array <b>J</b>.</p>
<p>The third line of each test case contains <b>N</b> space separated integers denoting the array <b>L</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing "#laughing_arjun" or "#itsnot_arjun". You should output "#itsnot_arjun" if you are sure that the person whose laugh intensities have been recorded is not Arjun. But if it could be Arjun, you should output "#laughing_arjun".</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li><b>J<sub>i</sub></b> = 1 or -1</li>
<li>0 ≤ <b>L<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>There will be no two jokes with the same intensity.</li>
<li>Sum of <b>N</b> over all the test cases in a single file ≤ 10<sup>6</sup>. </li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
4
4
1 1 -1 1
1 3 2 4
4
1 1 -1 1
3 1 2 4
4
1 1 -1 1
4 3 2 1
4
-1 -1 -1 -1
4 3 2 1

<b>Output</b>
#laughing_arjun
#laughing_arjun
#itsnot_arjun
#laughing_arjun
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Only the third joke was boring. All other jokes were amazing. The person laughed in increasing intensity over the good jokes (1 3 4), so he could be Arjun.</p>

<p><b>Example case 2.</b> Similar to the previous testcase, the third joke was boring. All other jokes were amazing. But the person didn't laugh in increasing intensity over the amazing jokes (3 1 4). However, Vaibhav might have been sleeping and he could have misrecorded the first joke as an amazing joke. In that case, the laughing intensities over the amazing jokes will be 1 4, which is in increasing order. So, this person could be Arjun.</p>

<p><b>Example case 3.</b> The third joke was boring again. The person didn't laugh in increasing intensity over the amazing jokes (4 3 1). Even if Vaibhav was sleeping, the recorded intensities over the amazing jokes could only be (3, 1), (4, 1), or (4, 3). None of these are increasing, and so this person is definitely not Arjun.</p>

<p><b>Example case 4.</b> All the jokes were boring. Arjun could have laughed in any intensity order. So this can be Arjun.</p>
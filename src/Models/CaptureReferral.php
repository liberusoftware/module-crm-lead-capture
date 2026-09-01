<?php

declare(strict_types=1);

namespace Liberu\CRM\LeadCapture\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

final class CaptureReferral extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_lead_capture_referrals';

    protected $fillable = ['team_id', 'actor_id', 'code', 'referrer_type', 'referrer_id', 'referred_type', 'referred_id', 'status', 'metadata'];

    protected function casts(): array
    {
        return ['metadata' => 'array'];
    }
}
